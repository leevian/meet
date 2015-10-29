<html>
    <?php include 'inc_common_head.html'; ?>
    <body id="home-page">
        <?php include 'inc_header.html'; ?>
        <div class="inner">
            <div class="bkg-dark">
                <div class="info-box con-1 con">
                    <div class="user-send">
                        
                        <div class="face-box"><a href=""><img src="files/images/face1.jpg"></a></div>
                        <div class="send-list bubble-box">
                            <i class="dec"></i>
                            <a class="text"href="">Text</a>
                            <a class="photo"href="">Photo</a>
                            <a class="diary"href="">Diary</a>
                            <a class="enjoyment"href="">Enjoyment</a>
                        </div>
                    </div>
                    <div class="trends-box">
                        <div class="face-box"><a href=""><img src="files/images/face1.jpg"></a></div>
                        <div class="diary-box dynamic-box bubble-box">
                            <i class="dec"></i>
                            <p><a href="">timu</a><span><a href="">@user</a></span></p>
                            <p>hehedadadadafesfldskfos fdsjflsdkjfosdf fsdjfldsjf fdsjlfkjdsf</p>
                            <div class="bottom">
                                <p class="time">2015年7月29日 10:00:00</p>

                                <div class="controller-box">
                                    <a class="remark" href="javascript:;">remark</a>
                                    <a class="like" href="">like</a>
                                </div>
                            </div>
                            <div class="remark-box">
                                <div class="remark-input">
                                    <form>
                                        <input type="text" name="remark">
                                        <button type="submit" class="btn btn-default">评论</button>
                                    </form>
                                </div>
                                <ul class="remark-list">
                                    <li>
                                        <div class="small-face">
                                            <a href=""><img src="files/images/face1.jpg"></a>
                                        </div>

                                        <div class="remark-info">
                                            <p><a href="">username:</a>1111</p>
                                            <p>时间<a href="javascript:;" class="replay">回复</a></p>
                                        </div>
                                    </li>

                                </ul>
                            </div>
                        </div>
    
                    </div>
                    <div class="trends-box">
                        <div class="face-box"><a href=""><img src="files/images/face1.jpg"></a></div>
                        <div class="image-box dynamic-box bubble-box">
                            <i class="dec"></i>
                            <p><a href="">timu</a><span><a href="">@user</a></span></p>
                            <div class="img-box">
                                <img src="files/images/images.jpg">
                            </div>
                             <div class="bottom">
                                <p class="time">2015年7月29日 10:00:00</p>

                                <div class="controller-box">
                                    <a class="remark" href="javascript:;">remark</a>
                                    <a class="like" href="">like</a>
                                </div>
                            </div>
                            <div class="remark-box">
                                <div class="remark-input">
                                    <form>
                                        <input type="text" name="remark">
                                        <button type="submit" class="btn btn-default">评论</button>
                                    </form>
                                </div>
                                <ul class="remark-list">
                                    <li>
                                        <div class="small-face">
                                            <a href=""><img src="files/images/face1.jpg"></a>
                                        </div>

                                        <div class="remark-info">
                                            <p><a href="">username:</a>1111</p>
                                            <p>时间<a href="javascript:;" class="replay">回复</a></p>
                                        </div>
                                    </li>

                                </ul>
                            </div>
                            
                        </div>

    
                    </div>
                </div>
                <div class="con-2 con">
                    1
                </div>
                <div class="con-3 con">
                    2
                </div>
                <div class="con-4 con">
                    3
                </div>
                <div class="f-right sider">
                     <div class="sec">
                        <div class="sec-top">
                            <h5>username</h5>
                            <p>个性签名</p>
                        </div>
                        <div class="sec-bottom">
                            <ul>
                                <li><a href="">关注的人<span>0</span></a></li>
                                <li><a class="fans" href="">粉丝<span>0</span></a></li>
                            </ul>
                        </div>
                        

                    </div>
                    <div class="sec sec-2">
                        <div class="sec-top">
                            <h5>新消息</h5>
                        </div>
                        <div class="sec-bottom">
                            <ul>
                                <li><a href="">收到的评论<span>0</span></a></li>
                                <li><a class="liked-icon" href="">收到的赞<span>0</span></a></li>
                                <li><a class="fans" href="">新增粉丝<span>0</span></a></li>
                            </ul>
                        </div>
                        

                    </div>
                    <div class="sec sec-3">
                        <div class="sec-top">
                            <h5>我的动态</h5>
                        </div>
                        <div class="sec-bottom">
                            <ul>
                                <li><a class="say-icon" href="">我的说说</a></li>
                                <li><a class="photos-icon" href="">我的相册</a></li>
                                <li><a class="diary-icon" href="">我的日记</a></li>
                                <li><a class="enjoy-icon" href="">我的分享</a></li>
                            </ul>
                        </div>
                        

                    </div>
                    <div class="sec sec-4">
                        <div class="sec-top">
                            <h5>留下的痕迹</h5>
                        </div>
                        <div class="sec-bottom">
                            <ul>
                                <li><a class="liked-icon" href="">我的喜欢</a></li>
                                <li><a class="remarked-icon" href="">我的参与</a></li>
                            </ul>
                        </div>
                        

                    </div>
                    
                </div>
            </div>

            <div class="text-pop">
                11111
            </div>
        </div>
       
        <script type="text/javascript">
            $(function(){
                $('.controller-box a.remark').click(function(){
                    if($(this).hasClass('active')){
                        $(this).removeClass('active');
                        $(this).parents('.trends-box').find('.remark-box').slideUp();
                    }else {
                        $(this).addClass('active');
                        $(this).parents('.trends-box').find('.remark-box').slideDown();

                    }
                });

                $('a.replay').click(function(){
                    var replay_info = '<div class="replay-box"><form><input type="text" name="remark"><button type="submit" class="btn btn-default">评论</button></div>  ';
                    if($(this).hasClass('active')){
                        $(this).removeClass('active');
                        $(this).parents('li').find('.replay-box').remove();
                    }else {
                        $(this).addClass('active');
                        $(this).parents('li').append(replay_info);
                    }

                })
            })
        </script>
    </body>
</html>

