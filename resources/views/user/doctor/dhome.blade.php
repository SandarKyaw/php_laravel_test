@extends('user.doctor.layout.master')
@section('content')
{{-- table --}}
                <div class="table_container mt-4">
                    <table class="table table-dark table-striped-columns">
                        <thead>
                            <tr>
                                <td>ID</td>
                                <td>UserID</td>
                                <td>Date</td>
                                <td>Section</td>
                                <td>Status</td>
                                <td>History</td>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $d)
                                <tr class="">
                                    <td>{{ $d->Id}}</td>
                                    <td>{{ $d->userId }}</td>
                                    <td>{{ $d->date}}</td>
                                    <td>{{ $d->startTime }} - {{$d->endTime}}</td>
                                     <input type="hidden" name="appoint_id" id="appoint_id" class="appoint_id" value="{{$d->Id}}">
                                    <td>
                                <select name="status" id="status" class="status list-group-item-primary form-select">
                                <option value="0" @if ($d->status == '0') selected @endif>Scheduled
                                </option>
                                <option value="1" @if ($d->status == '1') selected @endif>Cancel
                                </option>
                                <option value="2" @if ($d->status == '2') selected @endif>Confirm
                                </option>

                                </select>
                                    </td>
                                    <td>record</td>

                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div>

@endsection

@section('scriptSource')
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
     $(document).ready(function() {

        $('.status').change(function(){
            $statusVal = $(this).val();
            $parentNode = $(this).parents('tr');
            $appId = $parentNode.find('#appoint_id').val();

            console.log($appId);
            console.log($statusVal);
           if($statusVal){
              $.ajax({
                    type: 'get',
                    url: '/doctor/status/change',
                    data: {
                        'status':  $statusVal,
                        'id': $appId
                    },
                    dataType: 'json',
                    success: function(response) {
                                location.reload();
                            }
                });
           }
        });
     });
</script>
