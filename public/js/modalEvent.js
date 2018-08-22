$('#editCategoryModal').on('show.bs.modal', function (event) {

    console.log('editCategory show modal');
    var button = $(event.relatedTarget) // Button that triggered the modal
    var category = button.data('category') // Extract info from data-* attributes
     // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
    // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
    var modal = $(this)
    // modal.find('.modal-title').text('New message to ' + recipient)
    modal.find('.modal-body #categoryTitle').val(category.title);
    modal.find('.modal-body #categoryDescription').text(category.description);
  })