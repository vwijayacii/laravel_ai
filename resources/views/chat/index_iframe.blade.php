<!DOCTYPE html>
<html>

<head>
    <title>Colliers Intranet ChatGPT</title>
    {{-- <meta content="width=device-width, initial-scale=1" name="viewport" /> --}}
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
    <meta http-equiv="Content-Security-Policy" content="frame-src https://www.colliers.id;">
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" id="bootstrap-css">
    {{-- <link rel="stylesheet" href="{{ asset('assets/css/font-awesome.min.css') }}"> --}}
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">

    <style>
        * {
            font-family: "OpenSans", Verdana;
            font-size: 13px !important;
            font-weight: normal;
        }

        body,
        html {
            overflow-y: hidden;
            height: 100%;
            margin: 0;
            background: whitesmoke;
            color: black;
            /* background: #7F7FD5; */
            /* background: -webkit-linear-gradient(to right, #91EAE4, #86A8E7, #7F7FD5); */
            /* background: linear-gradient(to right, #91EAE4, #86A8E7, #7F7FD5); */
        }

        .chat {
            /* max-height: 450px; */
            margin-top: auto;
            margin-bottom: auto;
            overflow-y: auto;
            padding-right: 5px;
            padding-left: 5px;
        }

        .msg_card_body {
            overflow-y: auto;
            margin-bottom: 5px;
            /* height: 445px; */
            /* min-height: 290px; */
            /* max-height: 80%; */
            /* padding-bottom: 10px; */
            height: 80vh;
        }

        .input-bottom {
            width: 100%;
            position: absolute;
            bottom: 10px;
        }

        .container {
            align-content: center;
        }

        .type_msg {
            background-color: #003366 !important;
            border: 0 !important;
            color: white !important;
            height: 40px !important;
            overflow-y: auto;
            border-radius: 10px 0 0 10px !important;
        }

        .type_msg:focus {
            box-shadow: none !important;
            outline: 0px !important;
        }

        .send_btn {
            border-radius: 0 10px 10px 0 !important;
            background-color: #003366 !important;
            border: 0 !important;
            color: white !important;
            cursor: pointer;
        }

        .home_btn {
            border-radius: 10px 0 0 10px !important;
            background-color: rgba(0, 0, 0, 0.200) !important;
            border: 0 !important;
            color: #003366 !important;
            cursor: pointer;
        }

        .contacts {
            list-style: none;
            padding: 0;
        }

        .contacts li {
            width: 100% !important;
            padding: 5px 10px;
            margin-bottom: 15px !important;
        }

        .active {
            background-color: rgba(0, 0, 0, 0.3);
        }

        .user_img {
            height: 70px;
            width: 70px;
            border: 1.5px solid #f5f6fa;
        }

        .user_img_msg {
            height: 40px;
            width: 40px;
            border: 1.5px solid #f5f6fa;
        }

        .img_cont {
            position: relative;
            height: 70px;
            width: 70px;
        }

        .img_cont_msg {
            height: 40px;
            width: 40px;
        }

        .online_icon {
            position: absolute;
            height: 15px;
            width: 15px;
            background-color: #4cd137;
            border-radius: 50%;
            bottom: 0.2em;
            right: 0.4em;
            border: 1.5px solid white;
        }

        .offline {
            background-color: #c23616 !important;
        }

        .user_info {
            margin-top: auto;
            margin-bottom: auto;
            margin-left: 15px;
        }

        .user_info span {
            font-size: 20px;
            color: white;
        }

        .user_info p {
            font-size: 10px;
            color: rgba(255, 255, 255, 0.6);
        }

        .msg_container {
            margin-top: auto;
            margin-bottom: auto;
            margin-left: 10px;
            border-radius: 8px;
            /* background-color: #82ccdd; */
            background-color: #ccf9ff;
            color: #4f4f50;
            padding: 7px;
            position: relative;
            font-size: 1rem;
        }

        .msg_cotainer_send {
            margin-top: auto;
            margin-bottom: auto;
            margin-right: 10px;
            border-radius: 8px;
            /* background-color: #78e08f; */
            background-color: #007bff;
            color: white;
            padding: 7px;
            position: relative;
            font-size: 1rem;
        }

        .msg_time {
            position: absolute;
            left: 0;
            bottom: -15px;
            color: rgba(255, 255, 255, 0.5);
            font-size: 10px;
        }

        .msg_time_send {
            position: absolute;
            right: 0;
            bottom: -15px;
            color: rgba(255, 255, 255, 0.5);
            font-size: 10px;
        }

        .msg_head {
            position: relative;
        }

        .action_menu {
            z-index: 1;
            position: absolute;
            padding: 15px 0;
            background-color: rgba(0, 0, 0, 0.5);
            color: white;
            border-radius: 15px;
            top: 30px;
            right: 15px;
            display: none;
        }

        .action_menu ul {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .action_menu ul li {
            width: 100%;
            padding: 10px 15px;
            margin-bottom: 5px;
        }

        .action_menu ul li i {
            padding-right: 10px;
        }

        .action_menu ul li:hover {
            cursor: pointer;
            background-color: rgba(0, 0, 0, 0.2);
        }

        ::placeholder {
            color: white !important;
        }

        @media(max-width: 576px) {
            .contacts_card {
                margin-bottom: 15px !important;
            }
        }

        .loading {
            align-items: center;
            display: flex;
            /* justify-content: center; */
            /* height: 100%; */
            /* position: fixed; */
            /* width: 100%; */
        }

        .loading__dot {
            animation: dot ease-in-out 1s infinite;
            background-color: grey;
            display: inline-block;
            height: 10px;
            margin: 10px;
            width: 10px;
        }

        .loading__dot:nth-of-type(2) {
            animation-delay: 0.5s;
        }

        .loading__dot:nth-of-type(3) {
            animation-delay: 0.5s;
        }

        @keyframes dot {
            0% {
                background-color: #ffd500;
                transform: scale(1);
            }

            50% {
                background-color: #09a3df;
                transform: scale(1.3);
            }

            100% {
                background-color: #ed1b34;
                transform: scale(1);
            }
        }
    </style>
</head>

<body>
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-12 col-xl-12 chat">
                <div class="msg_card_body" id="chatgpt-box">
                    @if (!Session::get('topic'))
                        <div class="d-flex justify-content-start mb-2 mt-2">
                            <div class="img_cont_msg">
                                <img src="{{ asset('assets/images/colliers-icon.jpg') }}" class="rounded-circle user_img_msg">
                            </div>
                            <div class="msg_cotainer_send">
                                Hello{{ isset($_GET['p']) && $_GET['p'] ? ' ' . ucwords($_GET['p']) : '' }}, please choose a topic first
                            </div>
                        </div>
                        <div class="left-content-start">
                            @if (isset($_GET['q']) && in_array($_GET['q'], ['68b3bb2fa7177de8e2a85ad946b4d326-e0f2043bee7159e69102ac4c30001391', '2c5446a7c18361ac8deb9f1ffcfd4cc0-46b406a6a25c01fb3b6914fdbb9ffe74', '9c62f58bc58e46054dc9bf3fd4633d28-9f0c4c1167c97b2b27f6d2434f114d07']))
                                <button class="btn btn-sm btn-outline-primary topicBtn m-1" type="button" data-topic='Colliers Intranet'>Colliers Intranet</button>
                                <button class="btn btn-sm btn-outline-primary topicBtn m-1" type="button" data-topic='Technical Support'>Technical Support</button>
                                <button class="btn btn-sm btn-outline-primary topicBtn m-1" type="button" data-topic='Receptionist'>Receptionist</button>
                                <button class="btn btn-sm btn-outline-primary topicBtn m-1" type="button" data-topic='Market Report'>Market Report</button>
                                <button class="btn btn-sm btn-outline-primary topicBtn m-1" type="button" data-topic='Past Transaction'>Past Transactions</button>
                            @endif

                            <button class="btn btn-sm btn-outline-primary topicBtn m-1" type="button" data-topic='Company Regulation'>Company Regulation</button>
                            @if (isset($_GET['q']) && in_array($_GET['q'], ['2c5446a7c18361ac8deb9f1ffcfd4cc0-46b406a6a25c01fb3b6914fdbb9ffe74', '9c62f58bc58e46054dc9bf3fd4633d28-9f0c4c1167c97b2b27f6d2434f114d07', '68b3bb2fa7177de8e2a85ad946b4d326-e0f2043bee7159e69102ac4c30001391', '0708a7aae3ea3586f3dced3b7c4d8567-b3090fa44be31e2ae8561ed7a7da6525', '163edba92cffc21b1cf02b9c1a52c4c4-b3547e44522b162afc762cdd8038b674', '10aeff0552e6f48b55880014bdafd353-eafeaf0e20e47e1ff266754db3c62b7b']))
                                <button class="btn btn-sm btn-outline-primary topicBtn m-1" type="button" data-topic='REMS SOP Penerimaan Karyawan'>REMS SOP / Procedure </button>
                            @endif
                        </div>
                    @else
                        <div class="d-flex justify-content-center m-2">
                            Topic : {{ Session::get('topic') }}
                        </div>
                        <div class="d-flex justify-content-start mb-2 mt-2">
                            <div class="img_cont_msg">
                                <img src="{{ asset('assets/images/colliers-icon.jpg') }}" class="rounded-circle user_img_msg">
                            </div>
                            <div class="msg_cotainer_send">
                                Hello{{ isset($_GET['p']) && $_GET['p'] ? ' ' . ucwords($_GET['p']) : '' }}, How can I help you today?
                            </div>
                        </div>
                    @endif
                </div>
            </div>
            @if (Session::has('topic'))
                <div class="row input-bottom">
                    <div class="col-sm-12 col-md-12 col-xl-12">
                        <form id="formAskGpt" method="POST" autocomplete="off">
                            @csrf
                            <div class="text-center">
                                <a href="javascript:;" id="flushTopicBtn"> Back To Topic</a>
                                |
                                <a href="javascript:;"> Disclaimer</a>
                            </div>
                            <div class="input-group question-box">
                                <input name="message" id="message" class="form-control type_msg" placeholder="Enter your Question..."></input>
                                <div class="input-group-append">
                                    <button type="submit" class="input-group-text send_btn" title="Send Question">
                                        <i class="fas fa-location-arrow"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            @endif
        </div>
    </div>

    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <script>
        $(document).ready(function() {
            $("#formAskGpt").submit(function(e) {
                e.preventDefault();
                let imgColliers = "{{ asset('assets/images/colliers-icon.jpg') }}";
                let p = "{{ isset($_GET['p']) && $_GET['p'] ? ' ' . ucwords($_GET['p']) : '' }}";
                let o = "{{ isset($_GET['o']) && $_GET['o'] ? $_GET['o'] : asset('assets/images/user-icon.png') }}";
                let q = "{{ isset($_GET['q']) && $_GET['q'] ? $_GET['q'] : '' }}";
                let html = '<div class="d-flex justify-content-end mb-2"><div class="msg_container">';
                html += $('#message').val();
                html += '</div><div class="img_cont_msg"><img src="' + o + '" class="rounded-circle user_img_msg"></div></div>';
                $('#chatgpt-box').append(html);
                $.ajax({
                    url: "{{ url('chat') }}",
                    type: "POST",
                    data: $('#formAskGpt').serialize() + "&p=" + p + "&q=" + q,
                    beforeSend: function() {
                        // setting a timeout
                        htmlLoader = '<div class="loading flex-row">';
                        htmlLoader += '<div class="d-flex justify-content-start mb-2 mt-2">';
                        htmlLoader += '<div class="img_cont_msg">';
                        htmlLoader += '<img src="{{ asset('assets/images/colliers-icon.jpg') }}" class="rounded-circle user_img_msg">';
                        htmlLoader += '</div>';
                        htmlLoader += '<span class="loading__dot"></span>';
                        htmlLoader += '<span class="loading__dot"></span>';
                        htmlLoader += '<span class="loading__dot"></span>';
                        htmlLoader += '</div>';
                        htmlLoader += '</div>';
                        $('#chatgpt-box').append(htmlLoader);
                        $("#chatgpt-box").animate({
                            scrollTop: $('#chatgpt-box').prop("scrollHeight")
                        }, "smooth");
                    },
                    success: function(response) {
                        $('#chatgpt-box').append(response.responseText);
                        $('#message').val("");
                        $('.loading').remove();
                        $("#chatgpt-box").animate({
                            scrollTop: $('#chatgpt-box').prop("scrollHeight")
                        }, "smooth");
                    },
                    error: function(error) {
                        console.log(error);
                        $('.loading').remove();
                    }
                });
            });

            $(".topicBtn").click(function(e) {
                e.preventDefault();
                $.ajax({
                    url: "{{ url('change_topic') }}",
                    type: "POST",
                    data: {
                        'topic': $(this).data("topic")
                    },
                    beforeSend: function() {
                        // setting a timeout
                        // $('.loading').show();
                    },
                    success: function(response) {
                        location.reload();
                    },
                    error: function(error) {
                        console.log(error);
                        // $('.loading').hide();
                    }
                });
            })

            $("#flushTopicBtn").click(function(e) {
                e.preventDefault();
                $.ajax({
                    url: "{{ url('flush_topic') }}",
                    type: "POST",
                    data: {},
                    beforeSend: function() {
                        // setting a timeout
                        // $('.loading').show();
                    },
                    success: function(response) {
                        location.reload();
                    },
                    error: function(error) {
                        console.log(error);
                        // $('.loading').hide();
                    }
                });
            })
        });
    </script>
</body>

</html>
