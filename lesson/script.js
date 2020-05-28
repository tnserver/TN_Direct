$('#add_resolution').click(function() {
  var resolutionName = $('#resolution_name').val();
  var resolutionItemHTML = '<li>' + resolutionName + '</li>';
  $('#resolution_list').append(resolutionItemHTML);
});

$('#resolution_list span').click(function() {
  var listItem = $(this).parent();
  var itemInput = listItem.find('input');
  itemInput.val($(this).text()).show();
  $(this).hide();
});

$('#resolution_list input').blur(function() {
  var listItem = $(this).parent();
  var itemSpan = listItem.find('span');
  itemSpan.text($(this).val()).show();
  $(this).hide();
});

$('#resolution_list input').hide();

$('#resolution_list').sortable();