@if($data['isMobile'])
    <div class="menu1"><a href="#">Trực tiếp bóng đá</a></div>
@else

@endif

<div class="copyright">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-6">
                <div class="copyright-info">
                    <span>Copyright © 2017 5Vietnam All Rights Reserved</span>
                </div>
            </div>

            <div class="col-xs-12 col-sm-6">
                <div class="footer-menu">
                    <ul class="nav unstyled">

                        <li><a href="/top/page/aboutus">About us</a></li>
                        <li><a href="/top/page/writeus">Policy</a></li>
                        <li><a href="/top/page/advertise">Advertisement</a></li>
                    </ul>
                </div>
            </div>
        </div><!-- Row end -->

        <div id="back-to-top" data-spy="affix" data-offset-top="10" class="back-to-top affix">
            <button class="btn btn-primary" title="Back to Top">
                <i class="fa fa-angle-up"></i>
            </button>
        </div>

    </div><!-- Container end -->
</div><!-- Copyright end -->


<!-- Javascript Files
================================================== -->

<!-- initialize jQuery Library -->
<script type="text/javascript" src="{{ URL::asset('js/jquery.js') }}"></script>
<!-- Bootstrap jQuery -->
<script type="text/javascript" src="{{ URL::asset('js/bootstrap.min.js') }}"></script>
<!-- Owl Carousel -->
<script type="text/javascript" src="{{ URL::asset('js/owl.carousel.min.js') }}"></script>
<!-- Counter -->
<script type="text/javascript" src="{{ URL::asset('js/jquery.counterup.min.js') }}"></script>
<!-- Waypoints -->
<script type="text/javascript" src="{{ URL::asset('js/waypoints.min.js') }}"></script>
<!-- Color box -->
<script type="text/javascript" src="{{ URL::asset('js/jquery.colorbox.js') }}"></script>
<!-- Smoothscroll -->
<!--script type="text/javascript" src="{{--{{ URL::asset('js/smoothscroll.js') }}--}}"></script-->


<!-- Template custom -->
<script type="text/javascript" src="{{ URL::asset('js/custom.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.lazyload/1.9.1/jquery.lazyload.js"></script>
<script type="text/javascript">

    $('document').ready(function(){
        $("img").lazyload({
            effect : "fadeIn",
            effectTime: 1500
        });
        /*$('#searchname').click(function(){
            var search = $('#searchname').val();
            //$('.search-block').hide();
            window.location.href = '/search/values/' + $('#searchnameinput').val();
        });
        $('#searchnameinput').keypress(function(e){
            if(e.which == 13){//Enter key pressed
                $('#searchname').click();//Trigger search button click event
            }
        });*/
    });
</script>
@if($data['isMobile'])

<script>
    // Create a clone of the menu, right next to original.
    $('.menu').addClass('original').clone().insertAfter('.menu').addClass('cloned').css('position','fixed').css('top','0').css('margin-top','0').css('z-index','500').removeClass('original').hide();
    $('.menu1').addClass('original1').clone().insertAfter('.menu1').addClass('cloned1').css('position','fixed').css('bottom','0').css('margin-bottom','0').css('z-index','500').removeClass('original1').hide();

    scrollIntervalID = setInterval(stickIt, 10);


    function stickIt() {

        var orgElementPos = $('.original').offset();
        orgElementTop = orgElementPos.top;

        if ($(window).scrollTop() >= (orgElementTop)) {
            // scrolled past the original position; now only show the cloned, sticky element.

            // Cloned element should always have same left position and width as original element.
            orgElement = $('.original');
            coordsOrgElement = orgElement.offset();
            leftOrgElement = coordsOrgElement.left;
            widthOrgElement = orgElement.css('width');
            $('.cloned').css('left',leftOrgElement+'px').css('top',0).css('width',widthOrgElement).show();
            $('.original').css('visibility','hidden');
            $('.cloned1').css('left',leftOrgElement+'px').css('bottom',0).css('width',widthOrgElement).show();
            $('.original1').css('visibility','hidden');
        } else {
            // not scrolled past the menu; only show the original menu.
            $('.cloned').hide();
            $('.original').css('visibility','visible');
            $('.cloned1').hide();
            $('.original1').css('visibility','visible');
        }
    }
</script>
@endif
</div><!-- Body inner end -->
    <script type="text/javascript">
        var x = document.getElementById("searchnameinput");
        x.style.display = "none";
        function myFunction() {
          var x = document.getElementById("searchnameinput");
          if (x.style.display === "none") {
            x.style.display = "inline-table";
          } else {
            x.style.display = "none";
          }
        }
        $('#searchname').click(function(){
            if ($('#searchnameinput').val().length > 1){
                window.location.href = '/search/values/' + $('#searchnameinput').val();
            }
        });
        $('#searchnameinput').keypress(function(e){
            if(e.which == 13){
                $('#searchname').click();
            }
        });
        $(document).mouseup(function(e) {
            var container = $("#searchnameinput");
            // if the target of the click isn't the container nor a descendant of the container
            if (!container.is(e.target) && container.has(e.target).length === 0) {
                container.hide();
            }
        });
    </script>
</body>
</html>
