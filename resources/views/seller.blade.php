<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Amazon Clone</title>
    <link rel="stylesheet" href="css/style.css">
    <style src='js/app.js'></style>
    @vite('resources/css/app.css')
</head>
<header>
    <div class="flex flex-col">

        <div class="first flex justify-between items-center p-4 bg-green">
            <div class="second-1 flex items-center space-x-2">
                <div class="flex items-center space-x-1">
                    <i class="fas fa-bars text-xl"></i>
                    <span class="text-lg font-medium">All</span>
                </div>
            </div>
            <div class="logo">
                <a href="#"><img src="images/logo.png" alt="Amazon Logo" class="h-10"></a>
            </div>
            <div class="map flex items-center space-x-2">
                <i class="fas fa-map-marker-alt text-xl"></i>
                <div class="flex flex-col">
                    <span class="text-sm">Deliver to</span>
                    <span class="text-lg font-medium">India</span>
                </div>
            </div>
            <div class="input flex items-center bg-white rounded-lg shadow">
                <div class="dropdown flex items-center space-x-1 px-2">
                    <span>All</span>
                    <i class="fas fa-caret-down"></i>
                </div>
                <input type="text" aria-label="Search" class="p-2 flex-1 outline-none">
                <button class="search-button p-2 bg-yellow-500 text-white rounded-r-lg">
                    <i class="fas fa-search"></i>
                </button>
            </div>
            
            <div class="right flex items-center space-x-4">
                <div class="lang flex items-center space-x-2">
                    <img src="images/message.png" alt="Messages" class="h-6">
                    <img src="images/setting.png" alt="Settings" class="h-6">
                    <select class="bg-green text-white p-1 rounded">
                        <option value="EN" class="font-bold">EN</option>
                        <option value="EN" class="font-bold">EN</option>
                    </select>
                    <img src="images/help.png" alt="Help" class="h-6">
                </div>
            </div>
        </div>

        <div class="container mx-auto px-4 mt-4">
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 lg:grid-cols-5 gap-4">
                <a href="/add-product">
                    <div class="p-4 bg-gray-200 rounded-lg hover:bg-gray-400 transition duration-300 ease-in-out">
                    <p class="text-sm font-semibold">Add Product</p>
                    <p class="text-2xl font-bold">0</p>
                </div>
                    </a>
                <div class="p-4 bg-gray-200 rounded-lg hover:bg-gray-400 transition duration-300 ease-in-out">
                    <p class="text-sm font-semibold">Orders</p>
                    <p class="text-2xl font-bold">0</p>
                </div>
                <div class="p-4 bg-gray-200 rounded-lg hover:bg-gray-400 transition duration-300 ease-in-out">
                    <p class="text-sm font-semibold">Today's Sales</p>
                    <p class="text-2xl font-bold">$0</p>
                </div>
                <div class="p-4 bg-gray-200 rounded-lg hover:bg-gray-400 transition duration-300 ease-in-out">
                    <p class="text-sm font-semibold">Buyers Message</p>
                    <p class="text-2xl font-bold">0</p>
                </div>
                <div class="p-4 bg-gray-200 rounded-lg hover:bg-gray-400 transition duration-300 ease-in-out">
                    <p class="text-sm font-semibold">Customers Feedback</p>
                    <p class="text-2xl font-bold">0</p>
                </div>
                <div class="p-4 bg-gray-200 rounded-lg hover:bg-gray-400 transition duration-300 ease-in-out">
                    <p class="text-sm font-semibold">Total Balance</p>
                    <p class="text-2xl font-bold">$0</p>
                </div>
                <div class="p-4 bg-gray-200 rounded-lg hover:bg-gray-400 transition duration-300 ease-in-out">
                    <p class="text-sm font-semibold">Total Product</p>
                    <p class="text-2xl font-bold">0</p>
                </div>
                <div class="p-4 bg-gray-200 rounded-lg hover:bg-gray-400 transition duration-300 ease-in-out">
                    <p class="text-sm font-semibold">Out of Product</p>
                    <p class="text-2xl font-bold">0</p>
                </div>
            </div>
        </div>
        
        <div class="flex flex-row mt-4 px-4">
            <div>
                <h1 class="text-xl font-bold">Deposit Method</h1>
            </div>
        </div>
    </div>
</header>
