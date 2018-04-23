<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="icon" type="image/png" href="{{ asset('image/favicon.ico') }}">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>Dhisha Blood Donors Database</title>

	<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport" />

  	<link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/fresh-bootstrap-table.css') }}" rel="stylesheet" />

    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>

</head>
<body>

<div class="wrapper">
    <div class="fresh-table toolbar-color-red full-screen-table">
    <!--    Available colors for the full background: full-color-blue, full-color-azure, full-color-green, full-color-red, full-color-orange
            Available colors only for the toolbar: toolbar-color-blue, toolbar-color-azure, toolbar-color-green, toolbar-color-red, toolbar-color-orange
    -->

        <div class="toolbar">
            <a href="/"><button  class="btn btn-default">DHISHA</button><a>
        </div>
				@php $i=1;
				@endphp
        <table id="fresh-table" class="table">
            <thead>
                <th data-field="id">ID</th>
            	<th data-field="name" data-sortable="true">Name</th>
							<th data-field="BloodG" data-sortable="true">Blood Group</th>
            	<th data-field="city" data-sortable="true">City</th>
							<th data-field="salary">Mobile No.</th>
            	<!-- <th data-field="actions" data-formatter="operateFormatter" data-events="operateEvents">Actions</th> -->
            </thead>
            <tbody>
							@foreach($bloodlist as $a)
							<tr>
								<td>{{$i}} @php $i++; @endphp</td>
								<td>{{$a->name}}</td>
								<td>{{$a->bloodgroup}}</td>
								<td>@php
											switch($a->place)
											{
												case "AL":echo "Alappuzha";break;
												case "ER":echo "Ernakulam";break;
												case "ID":echo "Idukki";break;
												case "KN":echo "Kannur";break;
												case "KS":echo "Kasaragod";break;
												case "KL":echo "Kollam";break;
												case "KT":echo "Kottayam";break;
												case "KZ":echo "Kozhikode";break;
												case "MA":echo "Malappuram";break;
												case "PL":echo "Palakkad";break;
												case "PT":echo "Pathanamthitta";break;
												case "TV":echo "Thiruvananthapuram";break;
												case "TS":echo "Thrissur";break;
												case "WA":echo "Wayanad";break;
											}
											@endphp
								</td>
								<td>{{$a->phno}}</td>
							</tr>
							@endforeach
				    </tbody>
        </table>
    </div>

</div>


</body>
    <script type="text/javascript" src="{{ asset('js/jquery-1.11.2.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('bootstrap3/js/bootstrap.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/bootstrap-table.js') }}"></script>

    <script type="text/javascript">
        var $table = $('#fresh-table'),
            $alertBtn = $('#alertBtn'),
            full_screen = false,
            window_height;

        $().ready(function(){

            window_height = $(window).height();
            table_height = window_height - 20;


            $table.bootstrapTable({
                toolbar: ".toolbar",

                showRefresh: true,
                search: false,
                showToggle: true,
                showColumns: true,
                pagination: true,
                striped: true,
                sortable: false,
                height: table_height,
                pageSize: 25,
                pageList: [25,50,100],

                formatShowingRows: function(pageFrom, pageTo, totalRows){
                    //do nothing here, we don't want to show the text "showing x of y from..."
                },
                formatRecordsPerPage: function(pageNumber){
                    return pageNumber + " rows visible";
                },
                icons: {
                    refresh: 'fa fa-refresh',
                    toggle: 'fa fa-th-list',
                    columns: 'fa fa-columns',
                    detailOpen: 'fa fa-plus-circle',
                    detailClose: 'fa fa-minus-circle'
                }
            });

            window.operateEvents = {
                'click .like': function (e, value, row, index) {
                    alert('You click like icon, row: ' + JSON.stringify(row));
                    console.log(value, row, index);
                },
                'click .edit': function (e, value, row, index) {
                    alert('You click edit icon, row: ' + JSON.stringify(row));
                    console.log(value, row, index);
                },
                'click .remove': function (e, value, row, index) {
                    $table.bootstrapTable('remove', {
                        field: 'id',
                        values: [row.id]
                    });

                }
            };

            $alertBtn.click(function () {
                alert("You pressed on Alert");
            });


            $(window).resize(function () {
                $table.bootstrapTable('resetView');
            });
        });


        function operateFormatter(value, row, index) {
            return [
                '<a rel="tooltip" title="Like" class="table-action like" href="javascript:void(0)" title="Like">',
                    '<i class="fa fa-heart"></i>',
                '</a>',
                '<a rel="tooltip" title="Edit" class="table-action edit" href="javascript:void(0)" title="Edit">',
                    '<i class="fa fa-edit"></i>',
                '</a>',
                '<a rel="tooltip" title="Remove" class="table-action remove" href="javascript:void(0)" title="Remove">',
                    '<i class="fa fa-remove"></i>',
                '</a>'
            ].join('');
        }

    </script>

</html>
