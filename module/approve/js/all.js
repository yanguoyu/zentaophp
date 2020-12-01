$(function()
{
    $('#projectTableList').on('sort.sortable', function(e, data)
    {
        var list = '';
        for(i = 0; i < data.list.length; i++) list += $(data.list[i].item).attr('data-id') + ',';
        $.post(createLink('approve', 'updateOrder'), {'projects' : list, 'orderBy' : orderBy});
    });
});

function groupBy(productID, type, projectID, status)
{
    location.href = createLink('approve', 'all', "status=" + status + "&project=" + projectID + "&orderBy=" + orderBy + '&productID=' + productID + '&type=' + type);
}
