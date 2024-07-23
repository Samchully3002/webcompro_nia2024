<!doctype html>
    <html>
    <head>
       @include('backend.includes.head')
    </head>
    <body>
    <div class="layout-wrapper layout-content-navbar">
      <div class="layout-container">
      @include('backend.includes.header')
          <!-- Content wrapper -->
          <div class="content-wrapper">
            <!-- Content -->

            <div class="container-xxl flex-grow-1 container-p-y">
                @yield('content')
            </div>
            <!-- / Content -->

            @include('backend.includes.footer')
            <div class="content-backdrop fade"></div>
          </div>
          <!-- Content wrapper -->
        </div>
        <!-- / Layout page -->
      </div>

      <!-- Overlay -->
      <div class="layout-overlay layout-menu-toggle"></div>
    </div>
    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->

    <script src=" {{asset('backend/assets/vendor/libs/jquery/jquery.js')}}"></script>
    <script src=" {{asset('backend/assets/vendor/libs/popper/popper.js')}}"></script>
    <script src=" {{asset('backend/assets/vendor/js/bootstrap.js')}}"></script>
    <script src=" {{asset('backend/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js')}}"></script>
    <script src=" {{asset('backend/assets/vendor/js/menu.js')}}"></script>

    <!-- endbuild -->

    <!-- Vendors JS -->
    <script src="{{asset('backend/assets/vendor/libs/apex-charts/apexcharts.js')}}"></script>

    <!-- Main JS -->
    <script src="{{asset('backend/assets/js/main.js')}}"></script>

    <!-- Page JS -->
    <script src="{{asset('backend/assets/js/dashboards-analytics.js')}}"></script>

    <!-- Place this tag in your head or just before your close body tag. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>


    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.11.4/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.4/js/dataTables.bootstrap5.min.js"></script>

    <script>
    var tableTeam;
    var tableNotice;
    var tableNews;
    var tableMess;
    var tableTag;
    var tableAdmin;

      //==== display notif ==== //
      function dispNotif(title, message, status){
        Swal.fire({
            title: '',
            text: message,
            icon: status
          });
      }
      //== Show Team By Id == //
      function showTeam(id){
        $.ajax({
            url: '{{ route('dashboard.show.team') }}',
            type: 'GET',
            data: {id:id},
            dataType: 'json',
            success: function(response) {
                var user = response.employee;
                $("#uploadedAvatar").attr("src","{{asset('backend/images/employee/')}}/"+user.image);
                $("#id").val(user.id);
                $("#fullname").val(user.fullname);
                $("#role").val(user.role);
                $("#quotes").val(user.quotes);
                $("#sequence").val(user.sequence);
                $("#landing").val(user.landing);
            },
            error: function(xhr, status, error) {
                console.error(error);
            }
        });
      }

      // == show admin data ==//
      function showAdminById(id){
        $.ajax({
            url: '{{ route('dashboard.show.admin') }}',
            type: 'GET',
            data: {id:id},
            dataType: 'json',
            success: function(response) {
                var user = response.admin;
                $("#id").val(user.id);
                $("#name").val(user.name);
                $("#email").val(user.email);

            },
            error: function(xhr, status, error) {
                console.error(error);
            }
        });
      }

      //== Delete Team By Id == //
      function deleteTeam(id){

        Swal.fire({
        text: "You will delete team member",
        showCancelButton: true,
        confirmButtonText: "Delete",
        }).then((result) => {
          /* Read more about isConfirmed, isDenied below */
        if (result.isConfirmed) {
                    let userId = id;

        $.ajax({
            url: "{{ route('dashboard.delete.team')}}",
            type: 'GET',
            data: {id:id},
            dataType: 'json',
            success: function(response) {
              dispNotif('Deleting Data Success', response.message, 'success');
              tableTeam.ajax.reload();
            },
            error: function(xhr, status, error) {
              dispNotif('', 'error saving data', 'error');
            }
        });
          } else if (result.isDenied) {
        Swal.fire("Changes are not saved", "", "info");
  }



});
      }



      //== Delete Notice By Id == //
      function deleteNotice(id){

Swal.fire({
text: "You will delete notice data",
showCancelButton: true,
confirmButtonText: "Delete",
}).then((result) => {
  /* Read more about isConfirmed, isDenied below */
if (result.isConfirmed) {
            let userId = id;

$.ajax({
    url: "{{ route('dashboard.delete.notice')}}",
    type: 'GET',
    data: {id:id},
    dataType: 'json',
    success: function(response) {
      dispNotif('Deleting Data Success', response.message, 'success');
      tableNotice.ajax.reload();
    },
    error: function(xhr, status, error) {
      dispNotif('', 'error saving data', 'error');
    }
});
  } else if (result.isDenied) {
Swal.fire("Changes are not saved", "", "info");
}



});
}


      //== Delete News By Id == //
      function deleteNews(id){

Swal.fire({
text: "You will delete news data",
showCancelButton: true,
confirmButtonText: "Delete",
}).then((result) => {
  /* Read more about isConfirmed, isDenied below */
if (result.isConfirmed) {
            let userId = id;

$.ajax({
    url: "{{ route('dashboard.delete.news')}}",
    type: 'GET',
    data: {id:id},
    dataType: 'json',
    success: function(response) {
      dispNotif('Deleting Data Success', response.message, 'success');
      tableNews.ajax.reload();
    },
    error: function(xhr, status, error) {
      dispNotif('', 'error saving data', 'error');
    }
});
  } else if (result.isDenied) {
Swal.fire("Changes are not saved", "", "info");
}



});
}

      //== Show Message By Id == //
      function showMessage(id){
        $.ajax({
            url: '{{ route('dashboard.show.message') }}',
            type: 'GET',
            data: {id:id},
            dataType: 'json',
            success: function(response) {
                var mess = response.message;
                // $("#sent-date").val(mess.sentDate);
                $("#sender").val(mess.sender);
                $("#email").val(mess.email);
                $("#content-message").html(mess.message);
                tableMess.ajax.reload();

            },
            error: function(xhr, status, error) {
                console.error(error);
            }
        });
      }

      function showTagById(id){
        $.ajax({
            url: '{{ route('dashboard.show.tags') }}',
            type: 'GET',
            data: {id:id},
            dataType: 'json',
            success: function(response) {
                var tag = response.tags;
                $("#id").val(tag.id);
                $("#pages").val(tag.pages);
                $("#url").val(tag.url);
                $("#title").val(tag.title);
                $("#desc").val(tag.desc);
                $("#keyword").val(tag.keyword);

            },
            error: function(xhr, status, error) {
                console.error(error);
            }
        });
      }

      function deleteTag(id){

Swal.fire({
text: "You will delete tags data",
showCancelButton: true,
confirmButtonText: "Delete",
}).then((result) => {
  /* Read more about isConfirmed, isDenied below */
if (result.isConfirmed) {


$.ajax({
    url: "{{ route('dashboard.delete.tags')}}",
    type: 'GET',
    data: {id:id},
    dataType: 'json',
    success: function(response) {
      dispNotif('Deleting Data Success', response.message, 'success');
      tableTag.ajax.reload();
    },
    error: function(xhr, status, error) {
      dispNotif('', 'error saving data', 'error');
    }
});
  } else if (result.isDenied) {
Swal.fire("Changes are not saved", "", "info");
}



});
}
      //==============TEAM=================//

      //===============NEWS================//
      //===============NEWS================//

    $( document ).ready(function() {
    //=====================================================//
    if (window.location.href.indexOf("list-news") > -1) {
      tableNews = $('.news-table').DataTable({
        fixedColumns: true,
         autoWidth: false,
          processing: true,
          serverSide: true,
          ajax: "{{ route('dashboard.list.news') }}",
          columns: [
              {data: 'id', name: 'id'},
              {data: 'title', name:'title'},
              {data: 'source', name:'source'},
              {data: 'image', name:'image'},
              {data: 'action', name: 'action', orderable: false, searchable: false},
          ]
      });
    }

    //NOTICE
     tableNotice = $('.notice-table').DataTable({
          fixedColumns: true,
          processing: true,
          serverSide: true,
          ajax: "{{ route('dashboard.list.notice') }}",
          columns: [
              {data: 'id', name: 'id'},
              {data: 'title', name:'title'},
              {data: 'content', name:'content'},
              {data: 'date', name:'date'},
              {data: 'display', name:'display'},
              {data: 'action', name: 'action', orderable: false, searchable: false},
          ]
      });

      $("#notice_form_btn").click(function(e) {
        e.preventDefault();
        let form = $('#notice_form')[0];
        let data = new FormData(form);

        $.ajax({
          url: "{{ route('dashboard.post.notice.ajax') }}",
          type: "POST",
          data: data,
          dataType: "JSON",
          processData: false,
          contentType: false,
          success: function(response) {
            $('#notice_form')[0].reset();
            dispNotif('Saving Data Success', response.message, 'success');
        },
        error: function(xhr, status, error) {
          dispNotif('', 'error saving data', 'error');
          }

        });

      })
      // NOTICE END

      // TEAM

     tableTeam = $('.team-table').DataTable({
          processing: true,
          serverSide: true,
          ajax: "{{ route('dashboard.list.team') }}",
          columns: [
              {data: 'id', name: 'id'},
              {data: 'fullname', name: 'fullname'},
              {data: 'action', name: 'action', orderable: false, searchable: false},
          ]
      });

      $("#team_form_btn").click(function(e) {
        e.preventDefault();
        let form = $('#team_form')[0];
        let data = new FormData(form);

        $.ajax({
          url: "{{ route('dashboard.post.team') }}",
          type: "POST",
          data: data,
          dataType: "JSON",
          processData: false,
          contentType: false,
          success: function(response) {
            dispNotif('Saving Data Success', response.message, 'success');
            tableTeam.ajax.reload();
            $('#team_form')[0].reset();
            $("#uploadedAvatar").attr("src","{{asset('backend/assets/img/avatars/default.png')}}");
        },
          error: function(error) {
            tableTeam.ajax.reload();
            $('#team_form')[0].reset();
            $("#uploadedAvatar").attr("src","{{asset('backend/assets/img/avatars/default.png')}}");
            dispNotif('', 'error updating team member data', 'error');
          }

        });

      })

      // TEAM END


      // MESSAGE
      tableMess = $('.message-table').DataTable({
          fixedColumns: true,
          processing: true,
          serverSide: true,
          ajax: "{{ route('dashboard.list.message') }}",
          columns: [
              {data: 'DT_RowIndex', name: 'DT_RowIndex', orderable: false, searchable: false},
            //   {data: 'sentDate', name:'sentDate'},
              {data: 'sender', name:'sender'},
              {data: 'email', name:'email'},
              {data: 'message', name:'message'},
              {data: 'action', name: 'action', orderable: false, searchable: false},
          ],
      });


      // TAG
      tableTag = $('.tags-table').DataTable({
          fixedColumns: true,
          processing: true,
          serverSide: true,
          ajax: "{{ route('dashboard.list.tags') }}",
          columns: [
              {data: 'id', name: 'id'},
              {data: 'pages', name:'pages'},
              {data: 'url', name:'url'},
              {data: 'title', name:'title'},
              {data: 'desc', name:'desc'},
              {data: 'keyword', name:'keyword'},
              {data: 'action', name: 'action', orderable: false, searchable: false},
          ]
      });

      // ADMIN(s) 
      tableAdmin = $('.admins-table').DataTable({
          fixedColumns: true,
          processing: true,
          serverSide: true,
          ajax: "{{ route('dashboard.list.admins') }}",
          columns: [
              {data: 'id', name: 'id'},
              {data: 'name', name:'pages'},
              {data: 'email', name:'email'},
              // {data: 'password', name:'password'},
              {data: 'action', name: 'action', orderable: false, searchable: false},
          ]
      });

      $("#btn_form_tag").click(function(e) {
        e.preventDefault();
        let form = $('#form_tags')[0];
        let data = new FormData(form);

        $.ajax({
          url: "{{ route('dashboard.post.tags') }}",
          type: "POST",
          data: data,
          dataType: "JSON",
          processData: false,
          contentType: false,
          success: function(response) {
            dispNotif('Saving Data Success', response.message, 'success');
            tableTag.ajax.reload();
            $('#form_tags')[0].reset();

        },
          error: function() {
            dispNotif('', 'error updating tags data', 'error');
            console.log('error fetch data')
          }

        });

      });

      // ADMIN
      $("#btn_form_admin").click(function(e) {
        e.preventDefault();
        let form = $('#form_admin')[0];
        let data = new FormData(form);

        $.ajax({
          url: "{{ route('dashboard.post.admin') }}",
          type: "POST",
          data: data,
          dataType: "JSON",
          processData: false,
          contentType: false,
          success: function(response) {
            dispNotif('Saving Data Success', response.message, 'success');
            tableAdmin.ajax.reload();
            
        },
          error: function() {
            dispNotif('', 'error updating tags data', 'error');
            console.log('error fetch data')
          }

        });

      });

      // NEWS
      $("#btn_form_news").click(function(e) {
        e.preventDefault();
        let form = $('#form_news')[0];
        let data = new FormData(form);

        $.ajax({
          url: "{{ route('dashboard.store.news') }}",
          type: "POST",
          data: data,
          dataType: "JSON",
          processData: false,
          contentType: false,
          success: function(response) {
            dispNotif('Saving Data Success', response.message, 'success');
            tableTeam.ajax.reload();
            $('#form_news')[0].reset();
        },
          error: function() {
            dispNotif('', 'error updating news data', 'error');
            console.log('error fetch data')
          }

        });

      });





    });
</script>
    </body>
    </html>
