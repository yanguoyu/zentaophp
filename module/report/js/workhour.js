function changeParams(obj)
{
    var begin   = $('#conditions').find('#begin').val();
    var end     = $('#conditions').find('#end').val();
    var dept    = $('#conditions').find('#dept').val();

    if(begin.indexOf('-') != -1)
    {
        var beginarray = begin.split("-");
        var begin = '';
        for(i = 0; i < beginarray.length; i++) begin = begin + beginarray[i];
    }
    if(end.indexOf('-') != -1)
    {
        var endarray = end.split("-");
        var end = '';
        for(i = 0 ; i < endarray.length ; i++) end = end + endarray[i];
    }

    var link = createLink('report', 'workhour', 'begin=' + begin + '&end=' + end + '&dept=' + dept);
    location.href=link;
}

$(function()
{
    var options =
    {
        language: config.clientLang,
        weekStart: 1,
        todayBtn:  1,
        autoclose: 1,
        todayHighlight: 1,
        startView: 2,
        forceParse: 0,
        showMeridian: 1,
        minView: 2,
        format: 'yyyy-mm-dd',
        startDate: '2019/01/01',
        endDate: new Date(),
    };
    $('input#begin,input#end').fixedDate().datetimepicker(options);
});
