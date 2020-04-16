var CSRF_TOKEN = $('input[name="_token"]').val();
$(document).ready(function () {
    var url = window.location;

    // for sidebar menu entirely but not cover treeview
    $('ul.sidebar-menu a').filter(function () {
        console.log(this.href == url);
        return this.href == url;
    }).parent().addClass('active');

    // for treeview
    $('ul.treeview-menu a').filter(function () {
        var _url = sessionStorage.getItem('url');
        if (url === getSegmentUrl()) {
            $('[href ="' + url + '"]').parentsUntil().addClass('active');
        }

        return this.href == url
    }).parentsUntil(".sidebar-menu > .treeview-menu").addClass('active');

    $(document).on("click", ".delete", function () {
        $conf = confirm("Are you sure?");
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        if ($conf) {

            $_id = $(this).prev('[name=_id]').val();
            $.ajax({
                url: '/deleteMenu',
                type: 'POST',
                context: {element: $(this)},
                data: {_token: CSRF_TOKEN, id: $_id},
                dataType: 'JSON',
                success: function (data) {
                    if (data.success) {
                        $conf2 = alert("Deletion is not possible. ");
                    } else {
                        this.element.parent().submit();
                    }
                },
                error: function (data) {
                    console.log(data);
                }
            });


        }

    });
});

function getSegmentUrl(_url) {
    var segment = window.location.pathname.split('/');
    var newURL = window.location.protocol + "//" + window.location.host + "/";
    return newURL + segment[1] + "/" + segment[2];
}
