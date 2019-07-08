    <!-- jQuery -->
    <script src="{{ asset('js/vendors/jquery/dist/jquery.min.js') }}"></script>

   <!-- Bootstrap Core JavaScript -->
    <script src="{{ asset('js/vendors/popper.js/dist/umd/popper.min.js') }}"></script>
    <script src="{{ asset('js/vendors/bootstrap/dist/js/bootstrap.min.js') }}"></script>

    <!-- Slimscroll JavaScript -->
    <script src="{{ asset('js/pinkman/jquery.slimscroll.js') }}"></script>

    <!-- Fancy Dropdown JS -->
    <script src="{{ asset('js/pinkman/dropdown-bootstrap-extended.js') }}"></script>

    <!-- FeatherIcons JavaScript -->
    <script src="{{ asset('js/pinkman/feather.min.js') }}"></script>

    <!-- Toggles JavaScript -->
    <script src="{{ asset('js/vendors/jquery-toggles/toggles.min.js') }}"></script>
    <script src="{{ asset('js/pinkman/toggle-data.js') }}"></script>

    <!-- Counter Animation JavaScript -->
    <script src="{{ asset('js/vendors/waypoints/lib/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('js/vendors/jquery.counterup/jquery.counterup.min.js') }}"></script>

    <!-- Sparkline JavaScript -->
    <script src="{{ asset('js/vendors/jquery.sparkline/dist/jquery.sparkline.min.js') }}"></script>

    <!-- Vector Maps JavaScript -->
    <script src="{{ asset('js/vendors/vectormap/jquery-jvectormap-2.0.3.min.js') }}"></script>
    <script src="{{ asset('js/vendors/vectormap/jquery-jvectormap-world-mill-en.js') }}"></script>
    <script src="{{ asset('js/vendors/vectormap/jquery-jvectormap-de-merc.js') }}"></script>
    <script src="{{ asset('js/pinkman/vectormap-data.js') }}"></script>

    <!-- Owl JavaScript -->
    <script src="{{ asset('js/vendors/owl.carousel/dist/owl.carousel.min.js') }}"></script>

    <!-- Toastr JS -->
    <script src="{{ asset('js/vendors/jquery-toast-plugin/dist/jquery.toast.min.js') }}"></script>

    <!-- Apex JavaScript -->
    <script src="{{ asset('js/vendors/apexcharts/dist/apexcharts.min.js') }}"></script>
    <script src="{{ asset('js/pinkman/irregular-data-series.js') }}"></script>

    <!-- Init JavaScript -->
    <script src="{{ asset('js/pinkman/init.js') }}"></script>
    <script src="{{ asset('js/pinkman/dashboard-data.js') }}"></script>

    <!-- Code injected by live-server -->
    <script type="text/javascript">
        // <![CDATA[  <-- For SVG support
        if ('WebSocket' in window) {
            (function () {
                function refreshCSS() {
                    var sheets = [].slice.call(document.getElementsByTagName("link"));
                    var head = document.getElementsByTagName("head")[0];
                    for (var i = 0; i < sheets.length; ++i) {
                        var elem = sheets[i];
                        var parent = elem.parentElement || head;
                        parent.removeChild(elem);
                        var rel = elem.rel;
                        if (elem.href && typeof rel != "string" || rel.length == 0 || rel.toLowerCase() ==
                            "stylesheet") {
                            var url = elem.href.replace(/(&|\?)_cacheOverride=\d+/, '');
                            elem.href = url + (url.indexOf('?') >= 0 ? '&' : '?') + '_cacheOverride=' + (new Date()
                                .valueOf());
                        }
                        parent.appendChild(elem);
                    }
                }
                var protocol = window.location.protocol === 'http:' ? 'ws://' : 'wss://';
                var address = protocol + window.location.host + window.location.pathname + '/ws';
                var socket = new WebSocket(address);
                socket.onmessage = function (msg) {
                    if (msg.data == 'reload') window.location.reload();
                    else if (msg.data == 'refreshcss') refreshCSS();
                };
                if (sessionStorage && !sessionStorage.getItem('IsThisFirstTime_Log_From_LiveServer')) {
                    console.log('Live reload enabled.');
                    sessionStorage.setItem('IsThisFirstTime_Log_From_LiveServer', true);
                }
            })();
        } else {
            console.error('Upgrade your browser. This Browser is NOT supported WebSocket for Live-Reloading.');
        }
        // ]]>
    </script>
