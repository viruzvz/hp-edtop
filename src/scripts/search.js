$(document).ready(function(){
  $('#buscarModal').on('shown.bs.modal', function(){
    $(this).find('#search').focus()
  })
})