$(function()
{
    $('#projectTableList').on('sort.sortable', function(e, data)
    {
        var list = '';
        for(i = 0; i < data.list.length; i++) list += $(data.list[i].item).attr('data-id') + ',';
        $.post(createLink('project', 'updateOrder'), {'projects' : list, 'orderBy' : orderBy});
    });
});

function byProduct(productID, projectID, status, allstatus)
{
    location.href = createLink('project', allstatus, "status=" + status + "&project=" + projectID + "&orderBy=" + orderBy + '&productID=' + productID);
}
