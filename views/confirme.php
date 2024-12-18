<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
<div class="flex flex-1 flex-col  justify-center space-y-5 max-w-md mx-auto mt-24">
    <div class="flex flex-col space-y-2 text-center">
        <h2 class="text-3xl md:text-4xl font-bold">Confirm OTP</h2>
        <p class="text-md md:text-xl">
            Enter the OTP we just sent you.
        </p>
    </div>
    <div class="flex flex-col max-w-md space-y-5">
                        <input type="date" name="date" id="date"
                            class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                    <button class="flex items-center justify-center flex-none px-3 py-2 md:px-4 md:py-3 border-2 rounded-lg font-medium border-black bg-black text-white">
            Confirm
        </button>
    </div>
</div>
</body>
</html>