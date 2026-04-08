<aside class="left-header">
    <span class="lh_dec color-bg"></span>


    <div class="left-header_social">
        <ul >
            <li><a href="#" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
            <li><a href="#" target="_blank"><i class="fab fa-instagram"></i></a></li>
            <li><a href="#" target="_blank"><i class="fab fa-twitter"></i></a></li>
            <li><a href="#" target="_blank"><i class="fab fa-vk"></i></a></li>
        </ul>
    </div>
    <!-- Modal Structure -->
    <div id="qrModal" style="display:none; position: fixed; z-index: 9999; left: 0; top: 0; width: 100vw; height: 100vh; background: rgba(0,0,0,0.7); align-items: center; justify-content: center;">
        <div style="position:relative; max-width:90vw; max-height:90vh;">
            <img src="{{ asset('images/qr.png') }}" alt="qrcode big" style="display:block; max-width:80vw; max-height:80vh; margin:auto; border-radius:10px; background:white; padding:20px;">
            <button id="closeQrModal" style="position:absolute; top:10px; right:15px; background:rgba(0,0,0,0.7); color:#fff; border:none; font-size:1.8rem; border-radius:50%; width:40px; height:40px; cursor:pointer;">&times;</button>
        </div>
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Find the QR image by the unique src, since there might be other images
            var qrImg = document.querySelector('img[alt="qrcode"]');
            var modal = document.getElementById('qrModal');
            var closeBtn = document.getElementById('closeQrModal');
            if (qrImg && modal && closeBtn) {
                qrImg.style.cursor = 'pointer';
                qrImg.addEventListener('click', function(event) {
                    event.stopPropagation();
                    modal.style.display = 'flex';
                    modal.style.alignItems = 'center';
                    modal.style.justifyContent = 'center';
                });
                closeBtn.addEventListener('click', function(event) {
                    modal.style.display = 'none';
                });
                // Optional: Close modal when background is clicked
                modal.addEventListener('click', function(e) {
                    if (e.target === modal) {
                        modal.style.display = 'none';
                    }
                });
            }
        });
    </script>
    <img src="{{asset('images/qr.png')}}" height="auto" width="100%" style="position: absolute; bottom: 50px; padding: 10px; left: 0" alt="qrcode" id="qrcode"/>
</aside>
