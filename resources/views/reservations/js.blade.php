@section('js')
    <script>
        $('#calendar').fullCalendar({
            themeSystem: 'bootstrap4',
            businessHours: false,
            defaultView: 'month',
            editable: true,
            header: {
                left: 'title',
                center: 'month',
                right: 'today prev,next'
            },
            dayClick: function() {
                
            }
        });
    </script>
@stop