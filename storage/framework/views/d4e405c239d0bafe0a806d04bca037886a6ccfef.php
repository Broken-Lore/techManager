
      <!-- <button>
      <a method='POST' href="<?php echo e(route('login')); ?>">
      Login
      </a>
      </button> -->

        <?php if (isset($component)) { $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\AppLayout::class, []); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
         <?php $__env->slot('header'); ?> 
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            <em><?php echo e(__('Lore')); ?>meets</em>&nbsp;&nbsp;<?php echo e(('Tech Events')); ?>

        </h2>
         <?php $__env->endSlot(); ?>
        <!-- component -->
        <head>
        <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.4.1.min.js"></script>
        <script>
        var cont=0;
        function loopSlider(){
        var xx= setInterval(function(){
        switch(cont)
        {
        case 0:{
            $("#slider-5").fadeOut(400);
            $("#slider-4").fadeOut(400);
            $("#slider-3").fadeOut(400);
            $("#slider-1").fadeOut(400);
            $("#slider-2").delay(400).fadeIn(400);
            $("#sButton1").removeClass("bg-green-400");
            $("#sButton2").addClass("bg-green-400");
        cont=2;

        break;
        }
        case 1:
        {
            $("#slider-5").fadeOut(400);
            $("#slider-4").fadeOut(400);
            $("#slider-3").fadeOut(400);
            $("#slider-2").fadeOut(400);
            $("#slider-1").delay(400).fadeIn(400);
            $("#sButton2").removeClass("bg-green-400");
            $("#sButton1").addClass("bg-green-400");

        cont=0;

        break;
        }
        case 2:
        {
            $("#slider-5").fadeOut(400);
            $("#slider-4").fadeOut(400);
            $("#slider-1").fadeOut(400);
            $("#slider-2").fadeOut(400);
            $("#slider-3").delay(400).fadeIn(400);
            $("#sButton2").removeClass("bg-green-400");
            $("#sButton3").addClass("bg-green-400");

        cont=3;

        break;
        }
        case 3:
        {
            $("#slider-5").fadeOut(400);
            $("#slider-3").fadeOut(400);
            $("#slider-2").fadeOut(400);
            $("#slider-1").fadeOut(400);
            $("#slider-4").delay(400).fadeIn(400);
            $("#sButton3").removeClass("bg-green-400");
            $("#sButton4").addClass("bg-green-400");

        cont=4;

        break;
        }
        case 4:
        {
            $("#slider-4").fadeOut(400);
            $("#slider-3").fadeOut(400);
            $("#slider-2").fadeOut(400);
            $("#slider-1").fadeOut(400);
            $("#slider-5").delay(400).fadeIn(400);
            $("#sButton4").removeClass("bg-green-400");
            $("#sButton5").addClass("bg-green-400");

        cont=5;

        break;
        }
        case 5:
        {
            $("#slider-5").fadeOut(400);
            $("#slider-4").fadeOut(400);
            $("#slider-3").fadeOut(400);
            $("#slider-2").fadeOut(400);
            $("#slider-1").fadeOut(400);
            $("#slider-1").delay(400).fadeIn(400);
            $("#sButton5").removeClass("bg-green-400");
            $("#sButton1").addClass("bg-green-400");

        cont=1;

        break;
        }


        }},4000);

        }

        function reinitLoop(time){
        clearInterval(xx);
        setTimeout(loopSlider(),time);
        }



        function sliderButton1(){
        $("#slider-5").fadeOut(400);
        $("#slider-4").fadeOut(400);
        $("#slider-3").fadeOut(400);
        $("#slider-2").fadeOut(400);
        $("#slider-1").delay(400).fadeIn(400);
        $("#sButton5").removeClass("bg-green-400");
        $("#sButton2").removeClass("bg-green-400");
        $("#sButton3").removeClass("bg-green-400");
        $("#sButton4").removeClass("bg-green-400");
        $("#sButton1").addClass("bg-green-400");
        reinitLoop(4000);
        cont=1

        }

        function sliderButton2(){
        $("#slider-5").fadeOut(400);
        $("#slider-4").fadeOut(400);
        $("#slider-3").fadeOut(400);
        $("#slider-1").fadeOut(400);
        $("#slider-2").delay(400).fadeIn(400);
        $("#sButton5").removeClass("bg-green-400");
        $("#sButton1").removeClass("bg-green-400");
        $("#sButton3").removeClass("bg-green-400");
        $("#sButton4").removeClass("bg-green-400");
        $("#sButton2").addClass("bg-green-400");
        reinitLoop(4000);
        cont=0

        }

        function sliderButton3(){
        $("#slider-5").fadeOut(400);
        $("#slider-4").fadeOut(400);
        $("#slider-3").fadeOut(400);
        $("#slider-2").fadeOut(400);
        $("#slider-1").fadeOut(400);
        $("#slider-3").delay(400).fadeIn(400);
        $("#sButton5").removeClass("bg-green-400");
        $("#sButton1").removeClass("bg-green-400");
        $("#sButton2").removeClass("bg-green-400");
        $("#sButton4").removeClass("bg-green-400");
        $("#sButton3").addClass("bg-green-400");
        reinitLoop(4000);
        cont=2

        }

        function sliderButton4(){
        $("#slider-5").fadeOut(400);
        $("#slider-2").fadeOut(400);
        $("#slider-1").fadeOut(400);
        $("#slider-3").fadeOut(400);
        $("#slider-4").delay(400).fadeIn(400);
        $("#sButton5").removeClass("bg-green-400");
        $("#sButton3").removeClass("bg-green-400");
        $("#sButton1").removeClass("bg-green-400");
        $("#sButton2").removeClass("bg-green-400");
        $("#sButton4").addClass("bg-green-400");
        reinitLoop(4000);
        cont=3

        }

        function sliderButton5(){
        $("#slider-4").fadeOut(400);
        $("#slider-2").fadeOut(400);
        $("#slider-1").fadeOut(400);
        $("#slider-3").fadeOut(400);
        $("#slider-5").delay(400).fadeIn(400);
        $("#sButton4").removeClass("bg-green-400");
        $("#sButton3").removeClass("bg-green-400");
        $("#sButton1").removeClass("bg-green-400");
        $("#sButton2").removeClass("bg-green-400");
        $("#sButton5").addClass("bg-green-400");
        reinitLoop(4000);
        cont=4

        }


        $(window).ready(function(){
        $("#slider-5").hide();
        $("#slider-4").hide();
        $("#slider-3").hide();
        $("#slider-2").hide();
        $("#sButton1").addClass("bg-green-400");


        loopSlider();






        });


        </script>
        </head>

        <body>
        <div class="sliderAx h-auto pt-4">
        <?php if(Route::has('login')): ?>
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    <?php if(auth()->guard()->check()): ?>

                    <?php else: ?>
                        <a href="<?php echo e(route('login')); ?>" class="text-sm text-gray-700 underline">Log in</a>

                        <?php if(Route::has('register')): ?>
                            <a href="<?php echo e(route('register')); ?>" class="ml-4 text-sm text-gray-700 underline">Register</a>
                        <?php endif; ?>
                    <?php endif; ?>
                </div>
            <?php endif; ?>

        <div id="slider-1" class="container mx-auto">
        <div class="bg-cover bg-top  h-auto text-white py-24 px-10 object-fill" style="background-image: url(https://femtech2019.files.wordpress.com/2019/01/women-in-tech.jpg?w=1137); background-position: center;">

        <p class="font-bold text-sm uppercase">TedTalk</p>
        <p class="text-3xl font-bold">Women in technologys</p>
        <p class="text-2xl mb-10 leading-none">A case for positive discrimination</p>
        <a href="#" class="bg-green-400 py-4 px-8 text-white font-bold uppercase text-xs rounded hover:bg-gray-200 hover:text-gray-800">Join</a>
        <!-- ETIQUETA CON SHOW DE EVENTOS FALTA BIGOTITIOS   <a href="url ('/events/show/'.$event->id)" class="bg-green-400 py-4 px-8 text-white font-bold uppercase text-xs rounded hover:bg-gray-200 hover:text-gray-800">Select</a> -->
        </div> <!-- container -->
        <br>
        </div>


        <div id="slider-2" class="container mx-auto">
        <div class="bg-cover bg-top  h-auto text-white py-24 px-10 object-fill" style="background-image: url(https://i.ytimg.com/vi/KJ0u8z_8btw/maxresdefault.jpg); background-position: center;">

        <p class="font-bold text-sm uppercase">Masterclass</p>
        <p class="text-3xl font-bold">Agile mindset: nobody expects the Spanish inquisition</p>
        <p class="text-2xl mb-10 leading-none">How to become friends with adversity</p>
        <a href="#" class="bg-green-400 py-4 px-8 text-white font-bold uppercase text-xs rounded hover:bg-gray-200 hover:text-gray-800">Join</a>

        </div> <!-- container -->
        <br>
        </div>


        <div id="slider-3" class="container mx-auto">
        <div class="bg-cover bg-top  h-auto text-white py-24 px-10 object-fill" style="background-image: url(https://images.unsplash.com/photo-1527192491265-7e15c55b1ed2?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=750&q=80); background-position: bottom;">

        <p class="font-bold text-sm uppercase">Webinar</p>
        <p class="text-3xl font-bold">Break into Web Development</p>
        <p class="text-2xl mb-10 leading-none">How to get started as a web developer and build solid apps</p>
        <a href="#" class="bg-green-400 py-4 px-8 text-white font-bold uppercase text-xs rounded hover:bg-gray-200 hover:text-gray-800">Join</a>

        </div> <!-- container -->
        <br>
        </div>



        <div id="slider-4" class="container mx-auto">
        <div class="bg-cover bg-center  h-auto text-white py-24 px-10 object-fill" style="background-image: url(https://images.unsplash.com/photo-1519389950473-47ba0277781c?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=750&q=80)">
        <div class="md:w-1/2">
        <p class="font-bold text-sm uppercase">Workshop</p>
        <p class="text-3xl font-bold">Laravel 8 for Begginers</p>
        <p class="text-2xl mb-10 leading-none">Life is CRUD(e)</p>
        <a href="#" class="bg-green-400 py-4 px-8 text-white font-bold uppercase text-xs rounded hover:bg-gray-200 hover:text-gray-800">Join</a>
        </div>
        </div> <!-- container -->
        <br>
        </div>

        <div id="slider-5" class="container mx-auto">
        <div class="bg-cover bg-center  h-auto text-white py-24 px-10 object-fill" style="background-image: url(https://elporteno.cl/wp-content/uploads/2020/07/Antonio-Gramsci.jpg)">
        <div class="md:w-1/2">
        <p class="font-bold text-sm uppercase">Aquelarre</p>
        <p class="text-3xl font-bold">Populism: a defense</p>
        <p class="text-2xl mb-10 leading-none">Why all politicians should be populists</p>
        <a href="#" class="bg-green-400 py-4 px-8 text-white font-bold uppercase text-xs rounded hover:bg-gray-200 hover:text-gray-800">Join</a>
        </div>
        </div> <!-- container -->
        <br>
        </div>



        </div>
        <div  class="flex justify-center w-12 mx-auto pb-2">
            <div class="flex">
                <button id="sButton1" onclick="sliderButton1()" class="bg-green-300 rounded-full w-4 p-2 " ></button>
                <button id="sButton2" onclick="sliderButton2() " class="bg-green-300 rounded-full w-4 p-2"></button>
                <button id="sButton3" onclick="sliderButton3() " class="bg-green-300 rounded-full w-4 p-2"></button>
                <button id="sButton4" onclick="sliderButton4() " class="bg-green-300 rounded-full w-4 p-2"></button>
                <button id="sButton5" onclick="sliderButton5() " class="bg-green-300 rounded-full w-4 p-2"></button>
            </div>
        </div>

        </body>

        </body>
        <div class="py-12">
        <div class="flex justify-end pb-8 max-w-7xl">
        
        </div>
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-2">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">



        <div class="flex flex-col">
        <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
        <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
        <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
        <table class="min-w-full divide-y divide-gray-200">
            <thead class="bg-gray-50">
            <tr>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                Event
                </th>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                Description
                </th>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                Available places
                </th>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                Dates
                </th>
                <th scope="col" class="relative px-6 py-3">
                <span class="sr-only"></span>
                </th>
                <th scope="col" class="relative px-6 py-3">
                <span class="sr-only"></span>
                </th>
            </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
            <tr><?php $__currentLoopData = $events; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $event): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <td class="px-6 py-4 whitespace-wrap w-92">
                <div class="flex items-center w-92">
                <div class="flex-shrink-0 h-16 w-32">
                <a href="<?php echo e(url('/show/'.$event->id)); ?>" class="text-gray-600 hover:text-gray-900">
                <img class="h-16 w-32" src="<?php echo e(asset('storage').'/'.$event->image); ?>" alt="">
                </a>
                    </div>
                    <div class="ml-4">
                    <a href="<?php echo e(url('/show/'.$event->id)); ?>" class="text-gray-600 hover:text-gray-900"><?php echo e($event->title); ?></a>
                    </div>
                </div>
                </td>
                <td class="px-4 py-4 whitespace-nowrap">
                <div class="text-sm text-gray-500"><?php echo e($event->description); ?></div>
                </td>
                <td class="px-4 py-4 whitespace-nowrap">
                <span class="px-4 inline-flex text-xs leading-5 font-semibold bg-green-100 text-green-800">
                <?php echo e(count($event->users)); ?> / <?php echo e($event->capacity); ?>

                </span>
                </td>
                <td class="px-2 py-4 whitespace-nowrap text-sm text-gray-500">
                <?php echo e(date('d/m/Y', strtotime($event->date))); ?>

                </td>
                <td class="px-2 py-4 whitespace-nowrap text-right text-sm font-medium">

                <a href="<?php echo e(route('login')); ?>" class="border border-green-500 text-green-500 rounded-md px-4 py-2 m-2 transition duration-500 ease select-none hover:text-white hover:bg-green-600 focus:outline-none focus:shadow-outline">Join</a>

                </td>


            </tr>

            </tbody>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        </table>

        </div>

        </div>

        </div>

        </div>

            </div>
        </div>

        <div class="flex justify-center pt-8">
            <?php echo e($events->links()); ?>

        </div>
        </div>
         <?php if (isset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da)): ?>
<?php $component = $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da; ?>
<?php unset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>

<?php /**PATH C:\xampp\htdocs\techManager\resources\views/home/index.blade.php ENDPATH**/ ?>