<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
        integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>
<body>
    <x-admin-layout>
        <div class="flex absolute w-full temp">
            <x-admin-navbar />
            <div class="w-full t2">
                <x-admin-header>
                    <div
                        class="lable ml-10 max-[736px]:ml-1 border-l-4 break-words flex justify-center max-[673px]:text-sm items-center border-blue-800 pt-2 pb-2 pl-3 pr-3 bg-white">
                        <i
                            class="fa-solid fa-info flex justify-center items-center bg-blue-800 text-white rounded-full  w-6 h-6"></i>
                        <span class="pl-5 font-extrabold">Blog Setting - </span><span>&nbsp;Update Setting related
                            to your Blogging Facility</span>
                    </div>
                    <div
                        class="pr-10 flex flex-wrap max-[1340px]:mt-5 max-[1340px]:w-full max-[1340px]:justify-center max-[1340px]:pr-0">
                        <button class="pt-1 pb-1 mt-5 mr-6 pl-12 max-[1340px]:mr-2 pr-12 bg-white"><i
                                class="fa-solid fa-arrow-rotate-left "></i>&nbsp;Backup</button>
                        <button class="pt-1 pb-1 mr-6 mt-5 pl-12 pr-12 max-[1340px]:mr-0 bg-slate-800 text-white"><i
                                class="fa-solid fa-arrows-rotate"></i>&nbsp;Restore Backup</button>
                    </div>
                </x-admin-header>
                <div class="h-[600px]"></div>
            </div>
        </div>
    </x-admin-layout>
</body>
</html>