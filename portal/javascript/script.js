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

  if (dateStart && dateEnd && durationField) {


      // Check if both dates are already set on page load
      if (dateStart.value && dateEnd.value) {
          calculateDuration();
      }

      dateStart.addEventListener('change', () => {
          calculateDuration();
      });

      dateEnd.addEventListener('change', () => {
          calculateDuration();
      });

      function calculateDuration() {
          const startDate = new Date(dateStart.value);
          const endDate = new Date(dateEnd.value);

          if (startDate && endDate && !isNaN(startDate) && !isNaN(endDate)) {
              const duration = Math.ceil((endDate - startDate) / (1000 * 60 * 60 * 24));
              durationField.value = duration + ' giorni';
          } else {
              
              durationField.value = '';
          }
      }
  } else {
      console.log("One or more elements not found");
  }
});


