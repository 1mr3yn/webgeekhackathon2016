@extends('layouts.admin')
@section('content')
<section class="content-header">
    <h1>
      Emergency Alerts
      <small> </small>
    </h1>
</section>

<section class="content">
 <div class="row">
      <div class="col-xs-4">
          <div class="box box-danger">
            <div class="box-body table-responsive no-padding">
              <table class="table table-hover">
                <tbody><tr>
                  <th>ID</th>
                  <th>User</th>
                  <th>Date</th>
                  <th>Status</th>
                  <th>Reason</th>
                </tr>
                <tr>
                  <td>183</td>
                  <td>John Doe</td>
                  <td>11-7-2014</td>
                  <td><span class="label label-success">Approved</span></td>
                  <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
                </tr>
                <tr>
                  <td>219</td>
                  <td>Alexander Pierce</td>
                  <td>11-7-2014</td>
                  <td><span class="label label-warning">Pending</span></td>
                  <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
                </tr>
                <tr>
                  <td>657</td>
                  <td>Bob Doe</td>
                  <td>11-7-2014</td>
                  <td><span class="label label-primary">Approved</span></td>
                  <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
                </tr>
                <tr>
                  <td>175</td>
                  <td>Mike Doe</td>
                  <td>11-7-2014</td>
                  <td><span class="label label-danger">Denied</span></td>
                  <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
                </tr>
              </tbody></table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>

        <div class="col-xs-8">
          
          <div class="box box-danger">
            <div class="box-body">
               <div class="notification"></div>
            </div>
          </div>
        </div>

  </div>
</section>

@endsection

@section('scripts')
    <script>

        var pusher = new Pusher('40f9b4a93137b2be762f');

        var notificationsChannel = pusher.subscribe('notification-channel');

        notificationsChannel.bind('notification-event', function(notification){
            var message = notification.message;
            $('div.notification').text(message);
        });

    </script>

@endsection