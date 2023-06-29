<!-- Back to top -->
<a href="#top" id="back-to-top"><i class="fa fa-angle-double-up"></i></a>

<!-- Jquery -->
<script src="<?php echo e(URL::asset('plugins/jquery/jquery-3.6.0.min.js')); ?>"></script>

<!-- Bootstrap 5 -->
<script src="<?php echo e(URL::asset('plugins/bootstrap-5.0.2/js/bootstrap.bundle.min.js')); ?>"></script>

<!-- Sidemenu -->
<script src="<?php echo e(URL::asset('plugins/sidemenu/sidemenu.js')); ?>"></script>

<!-- P-scroll -->
<script src="<?php echo e(URL::asset('plugins/p-scrollbar/p-scrollbar.js')); ?>"></script>
<script src="<?php echo e(URL::asset('plugins/p-scrollbar/p-scroll.js')); ?>"></script>

<?php echo $__env->yieldContent('js'); ?>

<!-- Simplebar JS -->
<script src="<?php echo e(URL::asset('plugins/simplebar/js/simplebar.min.js')); ?>"></script>

<!-- Tippy JS -->
<script src="<?php echo e(URL::asset('plugins/tippy/popper.min.js')); ?>"></script>
<script src="<?php echo e(URL::asset('plugins/tippy/tippy-bundle.umd.min.js')); ?>"></script>

<!-- Toastr JS -->
<script src="<?php echo e(URL::asset('plugins/toastr/toastr.min.js')); ?>"></script>

<!-- Awselect JS -->
<script src="<?php echo e(URL::asset('plugins/awselect/awselect-custom.js')); ?>"></script>
<script src="<?php echo e(URL::asset('js/awselect.js')); ?>"></script>

<!-- Custom js-->
<script src="<?php echo e(URL::asset('js/custom.js')); ?>"></script>

<!-- Google Analytics -->
<?php if(config('services.google.analytics.enable') == 'on'): ?>
    <script async src="https://www.googletagmanager.com/gtag/js?id=<?php echo e(config('services.google.analytics.id')); ?>"></script>
    <script type="text/javascript">
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', '<?php echo e(config('services.google.analytics.id')); ?>');
    </script>
<?php endif; ?>

<!-- Mark as Read JS-->
<script type="text/javascript">

    function sendMarkRequest(id = null) {
        return $.ajax("<?php echo e(route('user.notifications.mark')); ?>", {
            method: 'POST',
            data: {"_token": "<?php echo e(csrf_token()); ?>", id}
        });
    }

    function changeTemplate(value) {
		let url = '<?php echo e(url('user/templates')); ?>/' + value;
		window.location.href=url;
	}

    var totalNotifications;
    var totalNotifications_a;
    var totalNotifications_b;

    $(function() {     

        $('.mark-as-read').on('click', function() {
            let request = sendMarkRequest($(this).data('id'));
            request.done(() => {
                $(this).parents('div.dropdown-item').remove();
            });

            document.getElementById("total-notifications").innerHTML = --totalNotifications;
            document.getElementById("total-notifications-a").innerHTML = --totalNotifications_a;
            document.getElementById("total-notifications-b").innerHTML = --totalNotifications_b;
        });

        $('#mark-all').on('click', function() {
            let request = sendMarkRequest();
            request.done(() => {
                $('div.notify-menu').remove();
            })

            document.getElementById("total-notifications").innerHTML = 0;
        });
    });        

    $(document).ready(function(){
       
        if (document.getElementById("total-notifications")) {
            totalNotifications = "<?php echo e(auth()->user()->unreadNotifications->where('type', '<>', 'App\Notifications\GeneralNotification')->count()); ?>";
            document.getElementById("total-notifications").innerHTML = totalNotifications;
        }  
        if (document.getElementById("total-notifications-a")) {
            totalNotifications_a = "<?php echo e(auth()->user()->unreadNotifications->where('type', '<>', 'App\Notifications\GeneralNotification')->count()); ?>";
            document.getElementById("total-notifications-a").innerHTML = totalNotifications_a;
        }
        if (document.getElementById("total-notifications-b")) {
            totalNotifications_b = "<?php echo e(auth()->user()->unreadNotifications->where('type', '<>', 'App\Notifications\GeneralNotification')->count()); ?>";
            document.getElementById("total-notifications-b").innerHTML = totalNotifications_b;
        }                  
        
    });

    tippy('[data-tippy-content]', {
        animation: 'scale-extreme',
        theme: 'material',
    });

    toastr.options.showMethod = 'slideDown';
    toastr.options.hideMethod = 'slideUp';
    toastr.options.progressBar = true;

    document.querySelector(".btn-theme-toggle > span").classList.add("fa-moon-stars");
    var myCookie = (document.cookie.match(/^(?:.*;)?\s*theme\s*=\s*([^;]+)(?:.*)?$/)||[,null])[1];
    if (myCookie == 'dark') {
            document.querySelector(".btn-theme-toggle > span").classList.remove("fa-moon-stars");
            document.querySelector(".btn-theme-toggle > span").classList.add("fa-sun-bright");  
            //var logo = document.querySelector(".desktop-lgo");
           // logo.src = '../img/brand/logo-white.png'
    }

    const btn = document.querySelector(".btn-theme-toggle");
    btn.addEventListener("click", function() {
        if (document.body.classList.contains('light-theme')) {
            document.body.classList.remove('light-mode');
            document.body.classList.add('dark-mode');
            document.querySelector(".btn-theme-toggle > span").classList.remove("fa-moon-stars");
            document.querySelector(".btn-theme-toggle > span").classList.add("fa-sun-bright");
            //var logo = document.querySelector(".desktop-lgo");
            //logo.src = '../img/brand/logo.png';
            var theme = "dark";
        } else if(document.body.classList.contains('dark-theme')) {
            document.body.classList.remove('dark-mode');
            document.body.classList.add('light-mode');
            document.querySelector(".btn-theme-toggle > span").classList.remove("fa-sun-bright");
            document.querySelector(".btn-theme-toggle > span").classList.add("fa-moon-stars");
            //var logo = document.querySelector(".desktop-lgo");
            //logo.src = '../img/brand/logo-white.png';
            var theme = "light";
        } else {
            document.querySelector(".btn-theme-toggle > span").classList.remove("fa-moon-stars");
            document.querySelector(".btn-theme-toggle > span").classList.add("fa-sun-bright");
            document.body.classList.add('dark-mode');
            //var logo = document.querySelector(".desktop-lgo");
            //logo.src = '../img/brand/logo-white.png';
            var theme = "dark";
        }
    
        document.cookie = "theme=" + theme + ";path=/";

        location.reload();
    });
   
</script>

<!-- Live Chat -->
<?php if(config('settings.live_chat') == 'on'): ?>
    <script type="text/javascript">
        let link = "<?php echo e(config('settings.live_chat_link')); ?>";
        let embed_link = link.replace('https://tawk.to/chat/', 'https://embed.tawk.to/');

        var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
        (function(){
            var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
            s1.async=true;
            s1.src=embed_link;
            s1.charset='UTF-8';
            s1.setAttribute('crossorigin','*');
            s0.parentNode.insertBefore(s1,s0);
        })();
    </script>
<?php endif; ?><?php /**PATH C:\OSPanel\domains\AI.ai\resources\views/layouts/footer-backend.blade.php ENDPATH**/ ?>