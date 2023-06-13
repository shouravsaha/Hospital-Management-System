
<!DOCTYPE html>
<html lang="en">
  <head>
    {{-- all css files are including css file --}}
    @include('admin.css')

  </head>
  <body>
    <div class="container-scroller">

      {{-- including sidebar section --}}
      @include('admin.sidebar')


        <!-- partial:partials/_navbar.html -->

        {{-- including navbar section --}}
        @include('admin.navbar')

        <div class="container-fluid page-body-wrapper">
            <div class="container" align="center" style="padding-top: 100px;">
                {{-- @if(session()->has('message'))
                <div class="alert alert-success">
                    {{ session()->get('message') }}
                    <button type="button" class="close" data-dismiss="alert">X</button>
                </div>
                @endif --}}
                <form action="{{ url('appointment_email_send', $data->id) }}" method="POST">
                @csrf
                    <div style="padding: 15px;">
                        <label for="doctor name">Greeting</label>
                        <input type="text" name="greeting" style="color:black" required>
                    </div>

                    <div style="padding: 15px;">
                        <label for="Phone">Body</label>
                        <input type="text" name="body" style="color:black" required>
                    </div>

                    <div style="padding: 15px;">
                        <label for="doctor name">Action Text</label>
                        <input type="text" name="actiontext" style="color:black" required>
                    </div>

                    <div style="padding: 15px;">
                        <label for="doctor name">Action Url</label>
                        <input type="text" name="actionurl" style="color:black" required>
                    </div>

                    <div style="padding: 15px;">
                        <label for="doctor name">End Part</label>
                        <input type="text" name="endpart" style="color:black" required>
                    </div>

                    <div style="padding:15px">
                        <input type="submit" class="btn btn-success">
                    </div>
                </form>
            </div>
        </div>

      <!-- page-body-wrapper ends -->

    <!-- container-scroller -->
    <!-- plugins:js -->

    {{-- including all script file --}}
    @include('admin.script')
    <!-- End custom js for this page -->
  </body>
</html>
