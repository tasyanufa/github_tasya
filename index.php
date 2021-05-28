<!DOCTYPE html>
<html>
<head lang="kr">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge"/>
    <title>Latihan Chart</title>
    <link rel="stylesheet" type="text/css" href="dist/tui-chart.css" />
    <link rel='stylesheet' type='text/css' href='https:
    //cdnjs.cloudflare.com/ajax/libs/codemirror/5.43.0/codemirror.css'/>
    <link rel='stylesheet' type='text/css' href='https:
    //cdnjs.cloudflare.com/ajax/libs/codemirror/5.43.0/addon/lint/lint.css'/>
    <link rel='stylesheet' type='text/css' href='https:
    //cdnjs.cloudflare.com/ajax/libs/codemirror/5.43.0/theme/neo.css'/>
    <link rel="stylesheet" type="text/css" href="css/example.css" />
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
</head>
<body>
<div class='wrap'>
    <div class='code-html' id='code-html'>
        <div id='chart-area'></div>
    </div>
</div>
<script type='text/javascript' src='https://uicdn.toast.com/tui.chart
/latest/raphael.js'></script>
<script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax
/libs/core-js/2.5.7/core.js'></script>
<script src='dist/tui-chart.js'></script>
<script class='code-js' id='code-js'>
var container = document.getElementById('chart-area');
$.getJSON('data.php',function(data){

var bulan = [];
var pribadi_personal= [];
var badan_institution = [];
for (var i in data){
        bulan.push(data[i].bulan);
        pribadi_personal.push(data[i].pribadi_personal);
        badan_institution.push(data[i].badan_institution);
}

var data = {
    categories: bulan,
    series: [
        {
            name: 'Pribadi Personal',
            data: pribadi_personal 
        },
        {
            name: 'Badan Institution',
            data: badan_institution
        }
    ]
};
var options = {
    chart: {
        width: 1160,
        height: 650,
        title: 'Jumlah Wajib Pajak yang Dikelola dan Terdaftar di KPP Pratama Batang Menurut Jenis dan Bulan di Kabupaten Batang',
        format: '1,000'
    },
    yAxis: {
        title: 'Nama Bulan'
    },
    xAxis: {
        title: 'Jumlah (jenis)',
    },
     series: {
         showLabel: true
     }
};
var theme = {
    series: {
        colors: [
            '#83b14e', '#458a3f', '#295ba0', '#2a4175', '#289399',
            '#289399', '#617178', '#8a9a9a', '#516f7d', '#dddddd'
        ]
    }
};

tui.chart.barChart(container, data, options);

});

</script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/codemirror
/5.43.0/codemirror.js'></script>
<script src='//ajax.aspnetcdn.com/ajax/jshint/r07/jshint.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.43.0
/addon/edit/matchbrackets.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.43.0
/addon/selection/active-line.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.43.0
/mode/javascript/javascript.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.43.0
/addon/lint/lint.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.43.0
/addon/lint/javascript-lint.js'></script>
<script src='js/example.js'></script>
</body>
</html>