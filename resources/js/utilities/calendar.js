export default function useCalendar() {

	const formatCalendarInTable = (data) => {
	  const grouped = {};

	  data.forEach(item => {
	    const startDate = new Date(item.start_date);
	    const endDate = new Date(item.end_date);
	    const month = startDate.toLocaleString('default', { month: 'long' });

	    if (!grouped[month]) {
	      grouped[month] = [];
	    }

	    if (startDate.getDate() === endDate.getDate()) {
	      grouped[month].push({
	        day: startDate.getDate(),
	        name: item.event_name,
		      eventId: item.id,
		      userId: item.user_id,
		      status: item.pin,
		      schoolYear: item.school_year,
		      start: item.start_date,
		      end: item.end_date,
	      });
	    } else {
	      grouped[month].push({
	        day: `${startDate.getDate()} to ${endDate.getDate()}`,
	        name: item.event_name,
		      eventId: item.id,
		      userId: item.user_id,
		      status: item.pin,
		      schoolYear: item.school_year,
		      start: item.start_date,
		      end: item.end_date,
	      });
	    }
	  });

	  return grouped;
	};

	const formatDateToYMD = (date) => {
		const year = date.getFullYear();
	  const month = String(date.getMonth() + 1).padStart(2, '0'); // Months are zero-based, so add 1
	  const day = String(date.getDate()).padStart(2, '0');
	  return `${year}-${month}-${day}`;
	};

	const formatDateRemoveLeadingZeros = (dateString) => {
	  return dateString.split('-')
	    .map(part => parseInt(part, 10))  // Convert each part to an integer to remove leading zeros
	    .join(', ');  // Join the parts back together with a comma and space
	};

	return {
		formatCalendarInTable,
		formatDateToYMD,
		formatDateRemoveLeadingZeros,
	};
}