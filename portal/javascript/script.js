const hamBurger = document.querySelector(".toggle-btn");

hamBurger.addEventListener("click", function () {
  document.querySelector("#sidebar").classList.toggle("expand");
});

document.addEventListener('DOMContentLoaded', (event) => {
    
  // Task List
  const draggables = document.querySelectorAll('.draggable');
  const container = document.getElementById('task-list');

  //Adding dragging evento to draggable elements
  draggables.forEach(draggable => {
  draggable.addEventListener('dragstart', () => {
    draggable.classList.add('dragging');
  });

  draggable.addEventListener('dragend', () => {
    draggable.classList.remove('dragging');
  });
  });

  //Handling dragover effect on Section
  container.addEventListener('dragover', e => {
  e.preventDefault();
  const afterElement = getDragAfterElement(container, e.clientY);
  const dragging = document.querySelector('.dragging');
  if (afterElement == null) {
    container.appendChild(dragging);
  } else {
    container.insertBefore(dragging, afterElement);
  }
  });

  function getDragAfterElement(container, y) {
  const draggableElements = [...container.querySelectorAll('.draggable:not(.dragging)')];

  return draggableElements.reduce((closest, child) => {
    const box = child.getBoundingClientRect();
    const offset = y - box.top - box.height / 2;
    if (offset < 0 && offset > closest.offset) {
    return { offset: offset, element: child };
    } else {
    return closest;
    }
  }, { offset: Number.NEGATIVE_INFINITY }).element;
  }

  // Strikethrough on Task-list
  document.querySelectorAll('#task-list .form-check-input').forEach(checkbox => {
    checkbox.addEventListener('change', function() {
      const listItem = this.closest('li');
      const listBadge = this.nextElementSibling;
      if (this.checked) {
        listItem.classList.add('text-decoration-line-through');
        listBadge.classList.remove('bg-info');
        listBadge.classList.add('bg-secondary');
      } else {
        listItem.classList.remove('text-decoration-line-through');
        listBadge.classList.remove('bg-secondary');
        listBadge.classList.add('bg-info');
      }
    });
  });

});

// Extimated date calculation on projectCreate.php
document.addEventListener('DOMContentLoaded', (event) => {
  const dateStart = document.querySelector('.date-start');
  const dateEnd = document.querySelector('.date-end');
  const durationField = document.querySelector('.extimated-duration');
  const durationExcludingWeekendsField = document.querySelector('.duration-excluding-weekends');
  const delayField = document.querySelector('.project-delay');

  if (dateStart && dateEnd && durationField) {
    if (dateStart.value && dateEnd.value) {
      calculateDuration();
      if (durationExcludingWeekendsField) calculateDurationExcludingWeekends();
      if (delayField) calculateDelay();
    }

    dateStart.addEventListener('change', () => {
      calculateDuration();
      if (durationExcludingWeekendsField) calculateDurationExcludingWeekends();
      if (delayField) calculateDelay();
    });

    dateEnd.addEventListener('change', () => {
      calculateDuration();
      if (durationExcludingWeekendsField) calculateDurationExcludingWeekends();
      if (delayField) calculateDelay();
    });

    function calculateDuration() {
      const startDate = new Date(dateStart.value);
      const endDate = new Date(dateEnd.value);

      if (startDate && endDate && !isNaN(startDate) && !isNaN(endDate)) {
        const totalDuration = Math.ceil((endDate - startDate) / (1000 * 60 * 60 * 24));
        durationField.value = totalDuration + ' giorni';
      } else {
        durationField.value = '';
      }
    }

    function calculateDurationExcludingWeekends() {
      const startDate = new Date(dateStart.value);
      const endDate = new Date(dateEnd.value);

      if (startDate && endDate && !isNaN(startDate) && !isNaN(endDate)) {
        let durationExcludingWeekends = 0;
        let currentDate = new Date(startDate);

        while (currentDate <= endDate) {
          const dayOfWeek = currentDate.getDay();
          if (dayOfWeek !== 0 && dayOfWeek !== 6) { // Exclude Sundays (0) and Saturdays (6)
            durationExcludingWeekends++;
          }
          currentDate.setDate(currentDate.getDate() + 1);
        }

        durationExcludingWeekendsField.value = durationExcludingWeekends + ' giorni';
      } else {
        durationExcludingWeekendsField.value = '';
      }
    }

    function calculateDelay() {
      const endDate = new Date(dateEnd.value);
      const currentDate = new Date();

      if (endDate && !isNaN(endDate)) {
        const delay = Math.ceil((currentDate - endDate) / (1000 * 60 * 60 * 24));
        delayField.value = delay > 0 ? delay + ' giorni' : 'Nessun ritardo';
      } else {
        delayField.value = '';
      }
    }
  } else {
    console.log("One or more elements not found");
  }
});



