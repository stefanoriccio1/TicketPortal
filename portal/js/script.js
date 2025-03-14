document.addEventListener('DOMContentLoaded', (event) => {

    
    var sidebarButton = document.getElementById('sidebarButton');
    var asides = document.querySelectorAll('aside');

    sidebarButton.addEventListener('click', function() {
        toggleSidebar();
    });     

    asides.forEach(function(aside) {
        aside.classList.toggle('d-none');
      });
    
    function toggleSidebar(){
        sidebar.classList.toggle('hiddenSidebar')
    }

    document.getElementById('sidebarButton').addEventListener('click', function() {
        var asides = document.querySelectorAll('aside');

      });

    // Task List

    const draggables = document.querySelectorAll('.draggable');
    const container = document.getElementById('task-list');

    //Aggiunta degli eventi di trascinamento agli elementi draggable
    draggables.forEach(draggable => {
    draggable.addEventListener('dragstart', () => {
        draggable.classList.add('dragging');
    });

    draggable.addEventListener('dragend', () => {
        draggable.classList.remove('dragging');
    });
    });

    //Gestione dell'evento dragover sul contenitore
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

    // Effetto Barrato su Task-list
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