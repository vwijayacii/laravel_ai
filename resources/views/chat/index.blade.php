<!DOCTYPE html>
<html>

<head>
    <title>Colliers Intranet ChatGPT</title>
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap411.min.css') }}" id="bootstrap-css">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap413.min.css') }}">
    {{-- <link rel="stylesheet" href="{{ asset('assets/css/font-awesome.min.css') }}"> --}}
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('assets/css/malihu-custom-scrollbar/jquery.mCustomScrollbar.min.css') }}">
    <script type="text/javascript" src="{{ asset('assets/js/jquery3.2.1/jquery.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/malihu-custom-scrollbar/jquery.mCustomScrollbar.min.js') }}"></script>

    <style>
        body,
        html {
            height: 100%;
            margin: 0;
            background: #7F7FD5;
            background: -webkit-linear-gradient(to right, #91EAE4, #86A8E7, #7F7FD5);
            background: linear-gradient(to right, #91EAE4, #86A8E7, #7F7FD5);
        }

        .chat {
            margin-top: auto;
            margin-bottom: auto;
        }

        .card {
            height: 100% !important;
            border-radius: 15px !important;
            /* background-color: rgba(255, 255, 255, 0.4) !important; */
            background-color: rgba(255, 255, 255, 1) !important;
        }

        .contacts_body {
            padding: 0.75rem 0 !important;
            overflow-y: auto;
            white-space: nowrap;
        }

        .msg_card_body {
            overflow-y: auto;
        }

        .card-header {
            border-radius: 15px 15px 0 0 !important;
            border-bottom: 0 !important;
        }

        .card-footer {
            border-radius: 0 0 15px 15px !important;
            border-top: 0 !important;
        }

        .container {
            align-content: center;
        }

        .search {
            border-radius: 15px 0 0 15px !important;
            background-color: rgba(0, 0, 0, 0.3) !important;
            border: 0 !important;
            color: white !important;
        }

        .search:focus {
            box-shadow: none !important;
            outline: 0px !important;
        }

        .type_msg {
            background-color: rgba(0, 0, 0, 0.3) !important;
            border: 0 !important;
            color: white !important;
            height: 60px !important;
            overflow-y: auto;
        }

        .type_msg:focus {
            box-shadow: none !important;
            outline: 0px !important;
        }

        .attach_btn {
            border-radius: 15px 0 0 15px !important;
            background-color: rgba(0, 0, 0, 0.3) !important;
            border: 0 !important;
            color: white !important;
            cursor: pointer;
        }

        .send_btn {
            border-radius: 0 15px 15px 0 !important;
            background-color: rgba(0, 0, 0, 0.3) !important;
            border: 0 !important;
            color: white !important;
            cursor: pointer;
        }

        .home_btn {
            border-radius: 15px 0 0 15px !important;
            background-color: rgba(0, 0, 0, 0.3) !important;
            border: 0 !important;
            color: white !important;
            cursor: pointer;
        }

        .search_btn {
            border-radius: 0 15px 15px 0 !important;
            background-color: rgba(0, 0, 0, 0.3) !important;
            border: 0 !important;
            color: white !important;
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

        .video_cam {
            margin-left: 50px;
            margin-top: 5px;
        }

        .video_cam span {
            color: white;
            font-size: 20px;
            cursor: pointer;
            margin-right: 20px;
        }

        /* .msg_cotainer_init {
            margin-top: auto;
            margin-bottom: auto;
            margin-left: 10px;
            border-radius: 10px;
            background-color: white;
            padding: 10px;
            position: relative;
        } */

        .msg_cotainer {
            margin-top: auto;
            margin-bottom: auto;
            margin-left: 10px;
            border-radius: 10px;
            /* background-color: #82ccdd; */
            background-color: #d2d6de;
            color: #4f4f50;
            padding: 10px;
            position: relative;
        }

        .msg_cotainer_send {
            margin-top: auto;
            margin-bottom: auto;
            margin-right: 10px;
            border-radius: 10px;
            /* background-color: #78e08f; */
            background-color: #007bff;
            color: white;
            padding: 10px;
            position: relative;
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
<!--Coded With Love By Mutiullah Samim-->

<body>
    <div class="container-fluid h-100">
        <div class="row justify-content-center mb-4 mt-4">
            <img alt="Colliers International" src="https://www.colliers.id/intranet/images/ColliersLogoRGB.gif" border="0" height="70">
        </div>
        <div class="row justify-content-center">
            <div class="col-md-12 col-xl-12 chat">
                <div class="card">
                    <div class="card-body msg_card_body" id="chatgpt-box">
                        {{-- <div class="d-flex justify-content-start mb-4">
                            <div class="img_cont_msg">
                                <img src="https://static.turbosquid.com/Preview/001292/481/WV/_D.jpg" class="rounded-circle user_img_msg">
                            </div>
                            <div class="msg_cotainer">
                                Hi, how are you samim?
                                <span class="msg_time">8:40 AM, Today</span>
                            </div>
                        </div> --}}
                        <div class="d-flex justify-content-center">
                            Colliers Intranet ChatGPT
                        </div>
                        <div class="d-flex justify-content-center mb-4">
                            How can I help you today?
                        </div>
                        @if (!Session::get('topic'))
                            <div class="d-flex justify-content-start mb-2 mt-2">
                                <div class="img_cont_msg">
                                    <img src="{{ asset('assets/images/colliers-icon.jpg') }}" class="rounded-circle user_img_msg">
                                </div>
                                <div class="msg_cotainer_send">
                                    Hello{{ isset($_GET['p']) && $_GET['p'] ? ' ' . ucwords($_GET['p']) : '' }}, please choose a topic first
                                </div>
                            </div>
                            @if (isset($_GET['q']) && in_array($_GET['q'], ['2c5446a7c18361ac8deb9f1ffcfd4cc0-46b406a6a25c01fb3b6914fdbb9ffe74','9c62f58bc58e46054dc9bf3fd4633d28-9f0c4c1167c97b2b27f6d2434f114d07']))
                                <button class="btn btn-sm btn-outline-primary topicBtn m-1" type="button" data-topic='Colliers Intranet'>Colliers Intranet</button>
                            @endif
                            <?php /*
                            <div class="d-flex justify-content-start mb-2">
                                <button class="btn btn-sm btn-outline-primary topicBtn" type="button" data-topic='Technical Support'>Technical Support</button>
                            </div>
                            */
                            ?>
                            <div class="d-flex justify-content-start mb-2">
                                <button class="btn btn-sm btn-outline-primary topicBtn" type="button" data-topic='Company Regulation'>Company Regulation</button>
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
                    @if (Session::has('topic'))
                        <form id="formAskGpt" method="POST" autocomplete="off">
                            @csrf
                            <div class="text-center">
                                <a href="javascript:;" id="flushTopicBtn"> Back To Topic</a>
                                |
                                <a href="javascript:;"> Disclaimer</a>
                            </div>
                            <div class="card-footer">
                                <div class="input-group question-box">
                                    <input name="message" id="message" class="form-control type_msg" placeholder="Enter your Question..."></input>
                                    <div class="input-group-append">
                                        <button type="submit" class="input-group-text send_btn" title="Send Question">
                                            <i class="fas fa-location-arrow"></i>
                                        </button>
                                    </div>
                                </div>
                                {{-- <div class="input-group">
                                    <div class="input-group-append">
                                        <button type="button" class="input-group-text home_btn" id="flushTopicBtn" title="Back To Home">
                                            <i class="fas fa-solid fa-home"></i>
                                        </button>
                                    </div>
                                    <input name="message" id="message" class="form-control type_msg" placeholder="ENTER YOUR QUESTION"></input>
                                    <div class="input-group-append">
                                        <button type="submit" class="input-group-text send_btn"><i class="fas fa-location-arrow"></i></button>
                                    </div>
                                </div> --}}
                            </div>
                        </form>
                    @endif
                </div>
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function() {
            $("#formAskGpt").submit(function(e) {
                e.preventDefault();
                let imgColliers = "{{ asset('assets/images/colliers-icon.jpg') }}";
                let nameEmployee = "{{ isset($_GET['p']) && $_GET['p'] ? ' ' . ucwords($_GET['p']) : '' }}";
                let imgUser = "{{ isset($_GET['o']) && $_GET['o'] ? $_GET['o'] : asset('assets/images/user-icon.png') }}";
                let html = '<div class="d-flex justify-content-end mb-2"><div class="msg_cotainer">';
                html += $('#message').val();
                html += '</div><div class="img_cont_msg"><img src="' + imgUser + '" class="rounded-circle user_img_msg"></div></div>';
                $('#chatgpt-box').append(html);
                $.ajax({
                    url: "{{ url('chat') }}",
                    type: "POST",
                    data: $('#formAskGpt').serialize() + "&p=" + nameEmployee,
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
