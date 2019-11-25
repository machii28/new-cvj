@section('js')
    <script>
        let events = [];

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
            dayClick: function(date) {
                let now = new Date();
                now = moment(now).format('YYYY-MM-DD');
                date = moment(date).format('YYYY-MM-DD');

                if (moment(now).isBefore(date)) {
                    $('#modalDate').val(date);
                    $('#addEvent').modal('show');
                }
            },
            events: events,
            eventRender: function(event, element) {
                element.attr('title', event.tip);
            }
        });

        $('#modalSaveEvent').on('click', function() {
            let input = {
                event: $('#modalEvent').val(),
                time: $('#modalTime').val(),
                event_place: $('#modalVenue').find('option:selected').val(),
                event_date: $('#modalDate').val(),
                _token: '{!! csrf_token() !!}'
            };

            $.ajax({
                url: '/reservations',
                type: 'POST',
                data: input,
                success: function(data) {
                    $('#modalEvent').val('');
                    $('#modalTime').val('');
                    $('#modalDate').val('');
                },
                error: function(error) {
                    console.log(error);
                }
            });
        });
    </script>
@stop