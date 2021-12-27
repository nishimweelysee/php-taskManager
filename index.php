<!DOCTYPE html>
<html lang="">

<head>
    <title>Toto App</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.css" integrity="sha512-vA/fpEI8+rrDsPceGG+Rz4NBhaNE4lvJ8CrNfspqDQi6uyIs82Hwr8gm/E+SRs+ZKjJ2ihOdb6esDSAuJrWOhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <div class="p-2 text-center  bg-gray-200 flex justify-between px-4">
        <div class="text-3xl font-bold"><a href="./index.php">TaskManager</a></div>
        <div class="text-xl font-bold"><a href="./service/view.php">Tasks</a></div>
    </div>
    <h3 class="text-center p-4">Schedule Your Task</h3>
    <div class="p-4 m-4  flex justify-center">
        <form class="w-3/5" action="./service/newTask.php" method="POST">
            <div class="mb-6">
                <label for="title" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Your title</label>
                <input type="text" id="title" name="title" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="name@flowbite.com" required>
            </div>
            <div class="mb-6">
                <label for="date" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Your date</label>
                <input type="date" id="date" name="date" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="date" required>
            </div>
            <div class="mb-6">
                <label for="username" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Your username</label>
                <input type="text" id="username" name="username" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="username" required>
            </div>
            <div class="mb-6">
                <label for="note" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Your Note</label>
                <textarea  id="note" name="note" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required></textarea>
            </div>
            <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
        </form>
    </div>
</body>

</html>