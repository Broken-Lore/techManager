<?php if (isset($component)) { $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\AppLayout::class, []); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
     <?php $__env->slot('header'); ?> 
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            <?php echo e(__('Create a New Event')); ?>

        </h2>
     <?php $__env->endSlot(); ?>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">

                <div class="flex h-screen bg-gray-200 items-center justify-center  mt-32 mb-32">
                    <div class="grid bg-white rounded-lg shadow-xl w-11/12 md:w-9/12 lg:w-1/2">
                        <div class="flex justify-center py-4">
                            <div class="flex bg-green-300 rounded-full md:p-4 p-2 border-2 border-green-400">
                                <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"></path></svg>
                            </div>
                            </div>

                            <div class="flex justify-center">
                            <div class="flex">
                                <h1 class="text-gray-600 font-bold md:text-2xl text-xl">New Event Form</h1>
                            </div>
                            </div>
                        <form action="<?php echo e(url('events')); ?>" method="post" enctype="multipart/form-data">
                        <?php echo csrf_field(); ?>
                            <div class="grid grid-cols-1 mt-5 mx-7">
                            <label for="title" class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold">Title</label>
                            <input class="py-2 px-3 rounded-lg border-2 border-green-400 mt-1 focus:outline-none focus:ring-2 focus:ring-green-500 focus:border-transparent" name="title" id="title" type="text" placeholder="Title" />
                            </div>

                            <div class="grid grid-cols-1 md:grid-cols-2 gap-5 md:gap-8 mt-5 mx-7">
                            <div class="grid grid-cols-1">
                                <label for="date" class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold">Date/s</label>
                                <input class="py-2 px-3 rounded-lg border-2 border-green-400 mt-1 focus:outline-none focus:ring-2 focus:ring-green-500 focus:border-transparent" type="date" id="date" name="date" />
                            </div>
                            <div class="grid grid-cols-1">
                                <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold">Available places</label>
                                <input class="py-2 px-3 rounded-lg border-2 border-green-400 mt-1 focus:outline-none focus:ring-2 focus:ring-green-500 focus:border-transparent"  name="capacity" id="capacity" type="number" placeholder="Available places" />
                            </div>
                            </div>

                                <div class="grid grid-cols-1 mt-5 mx-7">
                                    <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold">Type of event</label>
                                    
                                    <input type="radio" name="isFavorite" value="1">
                                    <span>Favorite</span>

                                    <input type="radio" name="isFavorite" value="0">
                                    <span>Not Favorite</span>

                                </div>

                            <div class="grid grid-cols-1 mt-5 mx-7">
                            <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold">Type of event</label>
                            <select class="py-2 px-3 rounded-lg border-2 border-green-400 mt-1 focus:outline-none focus:ring-2 focus:ring-green-500 focus:border-transparent">
                                <option>Workshop</option>
                                <option>Masterclass</option>
                                <option>Webinar</option>
                            </select>
                            </div>

                            <div class="grid grid-cols-1 mt-5 mx-7">
                                <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold">Description</label>
                                <textarea rows="6" class="py-2 px-3 rounded-lg border-2 border-green-400 mt-1 focus:outline-none focus:ring-2 focus:ring-green-500 focus:border-transparent"  name="description" id="description" ></textarea>
                            </div>

                            <div class="grid grid-cols-1 mt-5 mx-7">
                                <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold mb-1">Upload Photo</label>
                                <div class='flex items-center justify-center w-full'>
                                    <label class='flex flex-col border-4 border-dashed w-full h-32 hover:bg-gray-100 hover:border-green-400 group'>
                                        <div class='flex flex-col items-center justify-center pt-7'>
                                            <svg class="w-10 h-10 text-green-300 group-hover:text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                                            <p class='lowercase text-sm text-gray-400 group-hover:text-green-500 pt-1 tracking-wider'>Select a photo</p>
                                        </div>
                                    <input type='file' class="hidden" name="image" value="image" id="image">
                                    </label>
                                </div>
                            </div>

                            <div class='flex items-center justify-center  md:gap-8 gap-4 pt-5 pb-5'>
                                <button class='w-auto bg-gray-500 hover:bg-gray-700 rounded-lg shadow-xl font-medium text-white px-4 py-2'>Cancel</button>
                               <input type="submit" class='w-auto bg-green-400 hover:bg-green-300 rounded-lg shadow-xl font-medium text-white px-4 py-2' value="Create">
                            </div>

                        </div>
                    </div>
                    </form>


                </div>
            </div>
        </div>
    </div>
 <?php if (isset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da)): ?>
<?php $component = $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da; ?>
<?php unset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php /**PATH C:\xampp\htdocs\techManager\resources\views/admin/create.blade.php ENDPATH**/ ?>