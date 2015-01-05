<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <script type="text/javascript" src="../../jquery-1.8.3.js"></script>
    <script type="text/javascript" src="jquery-ui-1.9.2.custom.js"></script>
        <script type="text/javascript"> 
        $(function() { 
            $("#datepicker").datepicker(
                {
                    gotoCurrent: true,   
                    yearRange: 'c-10:c',
                    prevText: '上个月',
                    nextText: '下个月',
                    showMonthAfterYear: true,
                    dateFormat: 'yy/mm/dd',
                    changeMonth: true,
                    changeYear: true,
                    dayNamesMin: ['日', '一', '二', '三', '四', '五', '六'],
                    currentText: "today",
                    monthNamesShort: ['一月', '二月', '三月', '四月', '五月', '六月', '七月', '八月', '九月', '十月', '十一月', '十二月'],
                    showWeek:true,
                    calculateWeek: this.iso8601Week
                }
                ); 
        }); 
        
        </script> 
        </head> 
<body> 
<input id="datepicker" type="text"/> 
</body> 
</html>