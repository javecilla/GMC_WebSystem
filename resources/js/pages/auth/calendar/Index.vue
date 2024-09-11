<script setup>
import { ref, computed, onMounted } from 'vue';
import { useStore } from 'vuex';
import { useRoute } from 'vue-router';
import { DatePicker } from 'v-calendar';
import { useForm } from 'vee-validate';
import { useToast } from 'vue-toast-notification';

import useError from '@/utilities/error';
import useCalendar from '@/utilities/calendar';
import Section from '@/components/base/Section.vue';
import Container from '@/components/base/Container.vue';
import Main from '@/components/base/Main.vue';
import Row from '@/components/base/Row.vue';
import Column from '@/components/base/Column.vue';
import Content from '@/components/base/Content.vue';
import Card from '@/components/base/Card.vue';
import BreadCrumb from '@/components/auth/BreadCrumb.vue';

const store = useStore();
const route = useRoute();
const toast = useToast();
const { setError } = useError();
const { formatDateToYMD, formatDateRemoveLeadingZeros, formatCalendarInTable } = useCalendar();

const calendars = ref([]); //for multiple data
const calendar = ref([]);  //for single data
const mode = ref('add');
const range = ref({ start: '', end: '' });
const datePickerRef = ref(null);
const dragValue = ref(null);
const selectedColor = ref('yellow');
const selectDragAttribute = computed(() => ({
  popover: {
    visibility: 'hover',
    isInteractive: true,
  }
}));
const attrs = ref([{
  highlight: {
    color: 'dark',
    fillMode: 'light',
  }
}]);

const { handleSubmit, defineField, isSubmitting, resetForm, errors } = useForm({
  validationSchema: yup.object({
    event: yup.string().required(),
    schoolYear: yup.string().required(),
  }),
});
const [event, eventAttrs] = defineField('event');
const [schoolYear, schoolYearAttrs] = defineField('schoolYear');

//create new calendar
const onSubmit = handleSubmit.withControlled(async values => {
  try {
    const startDate = new Date(range.value.start);
    const endDate = new Date(range.value.end);

    const formData = { ...values,
      startDate: formatDateToYMD(startDate),
      endDate: formatDateToYMD(endDate),
    };

    const result = await store.dispatch('auth/calendar/onCreate', formData);
    await displayCalendars();

    onReset();
    toast.open({ message: result, type: 'success' });
  } catch(error) {
    toast.open({ message: error, type: 'error' });
  }
});

//display calendars
const displayCalendars = async () => {
  //get the calendars in the api then store it to state
  await store.dispatch('auth/calendar/setCalendars', '2023-2024');

  setTimeout(async () => {
    //get calendars in the state
    const getCalendars = await store.dispatch('auth/calendar/getCalendars');
    calendars.value = formatCalendarInTable(getCalendars);
  }, 50);
};

//toggle status calendar
const onToggleStatus = async (calendar) => {
  try {
    const formData = { ...calendar };
     //send request to update the calendar status(pin) by id...
    const result = await store.dispatch('auth/calendar/onToggleStatus', formData);
    await displayCalendars();

    toast.open({ message: result, type: 'success' });
  } catch(error) {
    toast.open({ message: error, type: 'error' });
  }
};

//edit calendar (render data)
const onEdit = (data) => {
  mode.value = 'edit';
  calendar.value = { ...data };

  const startDate = formatDateRemoveLeadingZeros(data.start);
  const endDate = formatDateRemoveLeadingZeros(data.end);

  range.value = { start: new Date(startDate), end: new Date(endDate) };
  //what ever start date month of the data the calendar move to that
  if(datePickerRef.value) {
    datePickerRef.value.move(range.value.start);
  }
};

//save changes (update)
const onUpdate = async () => {
  try {
    const startDate = new Date(range.value.start);
    const endDate = new Date(range.value.end);

    const formData = {
      id: calendar.value.eventId,
      event: calendar.value.name,
      schoolYear: calendar.value.schoolYear,
      startDate:formatDateToYMD(startDate),
      endDate:formatDateToYMD(endDate),
    };

    const result = await store.dispatch('auth/calendar/onUpdate', formData);
    await displayCalendars();
    //May 1-5
    toast.open({ message: result, type: 'success' });
  } catch(error) {
    toast.open({ message: error, type: 'error' });
  }
};

//delete calendar
const onDelete = async (id) => {
  if(confirm('Are you sure you want to delete this records?')) {
    try {
      const result = await store.dispatch('auth/calendar/onDelete', id);
      await displayCalendars();

      toast.open({ message: result, type: 'success' });
    } catch(error) {
      toast.open({ message: error, type: 'error' });
    }
  }
};

const onClose = () => {
  mode.value = 'add'
  calendar.value = {};
  range.value = { start: '', end: '' };
};

//reset form
const onReset = () => {
  resetForm();
  range.value = '';
}

onMounted(async() => {
  await displayCalendars();
});
</script>

<template>
  <Section className="calendar">
    <Container className="calendar-container">
      <BreadCrumb title="Calendar" to="route.name" />
      <Main className="mt-3">
        <Row>
          <Column className="col-md-8">
            <Card className="calendar-form-card table-responsive">
              <div class="header">
                <p class="description">
                  <i class="fa-regular fa-calendar"></i>
                  Showing Calendar for <strong>S.Y 2023-2024</strong>
                  <div class="float-end dropdown filter-dropdown">
                    <a class="btn btn-light btn-sm filter-dropdown-btn dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                      <img src="@assets/images/cms/icons/filter.png" class="img-icon rounded-circle flex-shrink-0" alt="icon" width="18" height="18" /> Filter
                    </a>
                    <ul class="dropdown-menu menu">
                      <li class="dropdown-item item">
                        <a href="#">S.Y 2024-2025</a>
                      </li>
                      <li class="dropdown-item item active">
                        <a href="#">S.Y 2023-2024</a>
                      </li>
                      <li class="dropdown-item item">
                        <a href="#">S.Y 2022-2023</a>
                      </li>
                      <li class="dropdown-item item">
                        <a href="#">S.Y 2021-2022</a>
                      </li>
                      <li class="dropdown-item item">
                        <a href="#">S.Y 2020-2021</a>
                      </li>
                    </ul>
                  </div>
                </p>
              </div>
              <div class="body">
                <table class="table">
                  <thead>
                    <tr>
                      <th>Month</th>
                      <th>Day</th>
                      <th>Event</th>
                      <th>Actions</th>
                    </tr>
                  </thead>
                  <tbody>
                    <template v-for="(events, month) in calendars" :key="month">
                      <tr v-for="(event, index) in events" :key="index">
                        <td v-if="index === 0" :rowspan="events.length">{{ month }}</td>
                        <td>{{ event.day }}</td>
                        <td @click="onEdit(event)" style="cursor: pointer">{{ event.name }}</td>
                        <td class="d-flex flex-row float-end">
                          <a @click.prevent="onToggleStatus(event)" href="#" class="btn btn-light btn-sm table-btn">
                            <span :class="['badge', 'opcaity-50', event.status === 'yes' ? 'text-bg-success' : 'text-bg-primary']">
                              {{ event.status === 'yes' ? 'Pin' : 'Not Pin' }}
                            </span>
                          </a>&nbsp;
                          <a @click.prevent="onDelete(event.eventId)" href="#" class="btn btn-light btn-sm table-btn delete"><img src="@assets/images/cms/icons/delete.png" alt="icon" width="20" height="20" class="flex-shrink-0"/> </a>
                        </td>
                      </tr>
                    </template>
                  </tbody>
                </table>
              </div>
            </Card>
          </Column>
          <Column className="col-md-4">
            <Content>
              <Card className="calendar-form-card">
                <div class="header">
                  <p class="description">
                    <img src="@assets/images/cms/icons/info.png" alt="icon" width="20" height="20" class="rounded-circle flex-shrink-0"/>
                    Use this module to add new events in the calendar.
                  </p>
                </div>
                <div class="body">
                  <!-- create form -->
                  <div class="create" v-if="mode === 'add'">
                    <div class="my-calendar">
                      <DatePicker
                        @drag="dragValue = $event"
                        v-model.range="range"
                        :select-attribute="selectDragAttribute"
                        :drag-attribute="selectDragAttribute"
                        :attributes="attrs"
                        :color="selectedColor"
                        mode="date"
                        title-position="left"
                        transition="fade"
                        expanded
                        borderless
                      >
                        <template #day-popover="{ format }">
                          <div class="text-sm">
                            {{ format(dragValue ? dragValue.start : range.start, 'MMM D') }}
                            -
                            {{ format(dragValue ? dragValue.end : range.end, 'MMM D') }}
                          </div>
                        </template>
                      </DatePicker>
                    </div>
                    <hr class="horizontal-line" />
                    <form @submit="onSubmit" method="POST" class="form">
                      <input
                        type="text"
                        name="event"
                        v-model="event"
                        v-bind="eventAttrs"
                        class="form-control input"
                        placeholder="Enter event name (e.g., Graduation Pictorial)"
                        autocomplete="on"
                      />
                      <span class="error-message">{{ setError(errors.event) }}</span>

                      <input
                        list="schoolYears"
                        name="schoolYear"
                        v-model="schoolYear"
                        v-bind="schoolYearAttrs"
                        class="form-control input"
                        placeholder="Enter or select school year (e.g., 2024-2025)"
                        autocomplete="on"
                      />
                      <datalist id="schoolYears">
                        <option value="2024-2025"/>
                        <option value="2023-2024"/>
                        <option value="2022-2023"/>
                        <option value="2021-2022"/>
                        <option value="2020-2021"/>
                      </datalist>
                      <span class="error-message">{{ setError(errors.schoolYear) }}</span>
                      <hr class="horizontal-line"/>
                      <div class="row" >
                        <button @click="onReset" type="button" class="btn btn-light button col-sm-4 col-form-label secondary">Reset</button>
                        <div class="col-sm-8">
                          <button :disabled="isSubmitting" type="submit" class="btn btn-light button w-100 primary">
                            {{ isSubmitting ? 'Submitting...' : 'Add to Calendar' }}
                          </button>
                        </div>
                      </div>
                    </form>
                  </div>
                  <!-- edit form -->
                  <div class="edit" v-else>
                    <div class="my-calendar">
                      <DatePicker
                        ref="datePickerRef"
                        @drag="dragValue = $event"
                        v-model.range="range"
                        :select-attribute="selectDragAttribute"
                        :drag-attribute="selectDragAttribute"
                        :attributes="attrs"
                        :color="selectedColor"
                        mode="date"
                        title-position="left"
                        transition="fade"
                        expanded
                        borderless
                      >
                        <template #day-popover="{ format }">
                          <div class="text-sm">
                            {{ format(dragValue ? dragValue.start : range.start, 'MMM D') }}
                            -
                            {{ format(dragValue ? dragValue.end : range.end, 'MMM D') }}
                          </div>
                        </template>
                      </DatePicker>
                    </div>
                    <hr class="horizontal-line" />
                    <form @submit.prevent="onUpdate" method="POST" class="form">
                      <input
                        type="text"
                        name="event"
                        v-model="calendar.name"
                        class="form-control input"
                      />

                      <input
                        list="schoolYears"
                        name="schoolYear"
                        class="form-control input mt-3"
                        v-model="calendar.schoolYear"
                      />
                      <datalist id="schoolYears">
                        <option value="2024-2025"/>
                        <option value="2023-2024"/>
                        <option value="2022-2023"/>
                        <option value="2021-2022"/>
                        <option value="2020-2021"/>
                      </datalist>
                      <hr class="horizontal-line"/>
                      <div class="row" >
                        <button @click="onClose" type="button" class="btn btn-light button col-sm-4 col-form-label secondary">Close</button>
                        <div class="col-sm-8">
                          <button :disabled="isSubmitting" type="submit" class="btn btn-light button w-100 primary">
                            {{ isSubmitting ? 'Submitting...' : 'Update Calendar' }}
                          </button>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
              </Card>
            </Content>
          </Column>
        </Row>
      </Main>
    </Container>
  </Section>
</template>

<style scoped>
.error-message {
  color: #E46868!important;
  font-size: 14px;
  margin-left: 5px;
  font-weight: bold;
}
.calendar { background: #FAFAFA; }
.calendar .calendar-container {
  max-width: 1290px;
  padding: 20px;
}

.my-calendar :deep(.vc-weekday-1) { color: var(--app-light-brown); }
.my-calendar :deep(.vc-weekday-7) { color: var(--app-light-brown); }

.calendar-form-card {
  margin-top: 20px;
  border-radius: 5px!important;
} .calendar-form-card .header {
  border-bottom: 1px solid #f3f3f3;
  background: #fbfbfb;
  border-top-left-radius: 5px!important;
  border-top-right-radius: 5px!important;
} .calendar-form-card .header .description {
  font-family: var(--app-font-nunito);
  font-size: 14px;
  color: #3D3F3F;
  opacity: .9;
  padding-left: 20px;
  padding-top: 20px;
} .calendar-form-card .body {
  padding: 20px;
} .form {
  margin-top: -10px;
}

.img-icon {
  /*remove image background blend with its background surrounded*/
  mix-blend-mode: multiply!important;
}
.filter-dropdown .menu {
  background: #fff!important;
  max-width: 320px;
}
.filter-dropdown .menu .item {
  color: #373D3F!important;
  text-decoration: none!important;
}
.filter-dropdown .menu .item:hover,
.filter-dropdown .menu .item:focus {
  background: transparent;
  text-decoration: underline;
  transform: scale(1.02);
  color: #373D3F;
  opacity: .9;
  text-shadow: none!important;
}
.filter-dropdown .menu .active {
  background: transparent;
  text-decoration: underline;
  font-weight: bolder;
  color: var(--app-light-brown)!important;
}
.dropdown-menu .dropdown-item {
  color: #373D3F!important;
  margin-left: 1px!important;
  margin-top: 6px;

}

.horizontal-line {
  color: #373D3F!important;
  opacity: .1;
  margin-bottom: 30px;
}
.input-label {
  font-size: 15px!important;
  font-family: var(--app-font-nunito);
}
.input {
  padding-top: .50rem;
  padding-bottom: .55rem;
  border: 1.90px solid #f3f3f3!important;
  border-radius: 5px;
  font-size: 15px!important;
  font-family: var(--app-font-nunito);
}
.input::placeholder {
  font-size: 15px!important;
  color: #000;
  opacity: .7;
} .input:focus {
  box-shadow: none!important;
  border: 1.90px solid var(--app-light-brown)!important;
}

.checkbox-input {
  padding-top: .50rem;
  padding-bottom: .55rem;
  border: 1.90px solid #f3f3f3!important;
  font-size: 15px!important;
  font-family: var(--app-font-nunito);
}

.button {
  font-size: 15px;
  font-family: var(--app-font-nunito);
  font-weight: 600;
  color: #373D3F;
  border: none;
  padding: 10px;
  border-radius: 5px;
  opacity: .9;
  transition: .2s all ease;
} .button:hover {
  transform: scale(1.02);
}
.button.primary {
  background: var(--app-light-brown);
  color: #f3f3f3;
}
.button.success {
  background: #0F6D0F;
  color: #f3f3f3;
}
.button.edit {
  background: #EFE215;
  color: #f3f3f3;
}
.button.delete {
  background: #E46868;
  color: #f3f3f3;
}
.button.view {
  background: #2284a6;
  color: #f3f3f3;
}

.filter-dropdown-btn {
  border: none;
  cursor: pointer;
  margin-right: 20px;
  margin-top: -5px;
}
.table {
  font-size: 15px;
  font-family: var(--app-font-nunito);
}
.table-icon.view {
  color: #2284a6;
}
.table-icon.primary {
  color: var(--app-light-brown);
}
.table-btn {
  border: none;
  transition: .2s all ease;
} .table-btn:hover {
  transform: scale(1.07);
}
.table-btn.edit {
  background: #EFE215!important;
}
.table-btn.delete {
  background: #E46868!important;
}
.table-btn.primary {
  background: var(--app-light-brown);
}

</style>