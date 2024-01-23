<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
        integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <title>Document</title>
    <style>
        .whole-screen {
            background: rgba(0, 0, 0, 0.386);
        }

        .whole-screen2 button,
        .whole-screen2 a,
        .whole-screen2 .lable {
            opacity: 0.5;
            cursor: not-allowed;
            pointer-events: none;
        }

        .ins-name {
            pointer-events: none;
            opacity: 0.75;
        }

        .not-ins-name {
            pointer-events: none;
            opacity: 0.75;
        }
    </style>
</head>

<body>
    <x-admin-layout>
        <div class="flex absolute w-full temp">
            <x-admin-navbar />
            <div class="w-full t2">
                <x-admin-header>
                    <div class="lable ml-10 max-[736px]:ml-1 border-l-4 flex justify-center max-[673px]:text-sm items-center border-blue-800 pt-2 pb-2 pl-3 pr-3 bg-white">
                        <i class="fa-solid fa-info flex justify-center items-center bg-blue-800 text-white rounded-full  w-6 h-6"></i>
                        <span class="pl-5 font-extrabold">Design Setting - </span><span>&nbsp;Update Setting related
                            to your design elements</span>
                    </div>
                    <div
                        class="pr-10 flex flex-wrap max-[1340px]:mt-5 max-[1340px]:w-full max-[1340px]:justify-center max-[1340px]:pr-0">
                        <button class="pt-1 pb-1 mt-5 mr-6 pl-12 max-[1340px]:mr-2 pr-12 bg-white"><i
                                class="fa-solid fa-arrow-rotate-left "></i>&nbsp;Backup</button>
                        <button class="pt-1 pb-1 mr-6 mt-5 pl-12 pr-12 max-[1340px]:mr-0 bg-slate-800 text-white"><i
                                class="fa-solid fa-arrows-rotate"></i>&nbsp;Restore Backup</button>
                    </div>
                </x-admin-header>
                <div class=" flex w-full h-12">
                    <a href={{ Route('admin.setting') }}>
                        <div
                            class="flex justify-center items-center border-t-4 border-blue-800 w-fit pl-10 pr-10 ml-5 h-full bg-white cursor-pointer">
                            <span>General</span>
                        </div>
                    </a>
                    <a href={{ Route('admin.setting.color') }}>
                        <div
                            class="flex justify-center items-center bg-slate-300 border-4 border-slate-200 w-fit pl-10 pr-10 ml-5 h-full cursor-pointer">
                            <span>Colour Sets</span>
                        </div>
                    </a>
                </div>
                <form method="post" action="{{ route('admin.general.setting') }}">
                    @method('PUT')
                    @csrf
                <div class="bg-slate-100 temp3 pb-10">
                    <div class="flex justify-between ml-28 mr-28 mt-7 max-[1000px]:ml-8 max-[1000px]:mr-5">
                        <div>
                            <span class="text-2xl font-bold">General Setting</span>
                        </div>
                        <div>
                            <a href=# class="editing"><i class="fa-solid fa-pen-to-square text-2xl"></i><span
                                    class="text-xl">&nbsp;Edit</span></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <button type="submit"><a href=# class="save hidden text-green-600"><i
                                    class="fa-solid  text-green-600 fa-floppy-disk text-2xl"></i><span
                                    class="text-xl">&nbsp;Save</span></a></button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <a href=# class="cancel hidden text-red-600"><i
                                    class="fa-solid fa-xmark text-red-600 text-2xl"></i><span
                                    class="text-xl">&nbsp;Cancel</span></a>
                        </div>
                    </div>
                    <div class="">
                        <x-admin-general-setting label='Institution Name' labelValue="{{ Auth::guard('admin')->user()->Institution_Name }}" boxType="text" name="instituionName"/>
                        <x-admin-general-setting label='Tag Line' labelValue="{{ Auth::guard('admin')->user()->Tag_line }}" boxType="text" name="tagLine"/>
                        <x-admin-general-setting label='URL' labelValue="{{ Auth::guard('admin')->user()->URL }}" boxType="text" name="URL"/>
                        <x-admin-general-setting label='Email' labelValue="{{ Auth::guard('admin')->user()->email }}" boxType="not-editable" name="email"/>
                        <x-admin-general-setting label='Password' labelValue="{{ Auth::guard('admin')->user()->password }}" boxType="password" name="password"/>
                        <x-admin-general-setting label='Time Zone' labelValue="{{ Auth::guard('admin')->user()->Time_Zone }}" boxType="select" name="timeZone"/>
                        <x-admin-general-setting label='Address' labelValue="{{ Auth::guard('admin')->user()->Address }}" boxType="textArea" name="address"/>
                    </div>
                </div>
                </form>
            </div>
        </div>


        <script>
            $('.editing').click(function() {
                $('.remove-name').removeClass('ins-name');
                $('.save').removeClass('hidden');
                $('.cancel').removeClass('hidden');
                $('.editing').addClass('hidden');
            });

            $('.cancel').click(function() {
                $('.remove-name').addClass('ins-name');
                $('.save').addClass('hidden');
                $('.cancel').addClass('hidden');
                $('.editing').removeClass('hidden');
            });
        </script>

    </x-admin-layout>
</body>

</html>
