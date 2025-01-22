import React, { useState } from "react";

const Header = () => {
    const [isMenuOpen, setIsMenuOpen] = useState(false);

    const toggleMenu = () => {
        setIsMenuOpen(!isMenuOpen);
    };

    return (
        <header className="bg-gray-50 py-4 px-10">
            <div className="container flex items-center justify-between">
                <div className="flex flex-row gap-8">
                    {/* Logo */}
                    <div className="flex items-center">
                        <img
                            src="/assets/img/logo.png"
                            alt="Logo"
                            className="w-[216px] h-[42px]"
                        />
                    </div>

                    {/* Navigation */}
                    <nav
                        className={`${
                            isMenuOpen ? "block" : "hidden"
                        } md:flex md:items-center md:space-x-8 text-gray-600 fixed md:static top-0 left-0 w-2/3 md:w-auto h-full md:h-auto shadow-lg md:shadow-none p-4 md:p-0 transition-transform`}
                    >
                        <a
                            href="#"
                            className="block md:inline-block py-2 px-w hover:text-blue-700"
                        >
                            Find a Tutor
                        </a>
                        <a
                            href="#"
                            className="block md:inline-block py-2 px-w hover:text-blue-700"
                        >
                            Tutor
                        </a>
                        <a
                            href="#"
                            className="block md:inline-block py-2 px-w hover:text-blue-700"
                        >
                            About Us
                        </a>
                        <a
                            href="#"
                            className="block md:inline-block py-2 px-w hover:text-blue-700"
                        >
                            Contact
                        </a>
                    </nav>
                </div>

                <div className="flex">
                    {/* Hamburger Button for Mobile */}
                    <button
                        className="md:hidden text-gray-600 focus:outline-none"
                        onClick={toggleMenu}
                    >
                        <svg
                            className="w-6 h-6"
                            fill="none"
                            stroke="currentColor"
                            viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg"
                        >
                            <path
                                strokeLinecap="round"
                                strokeLinejoin="round"
                                strokeWidth="2"
                                d="M4 6h16M4 12h16M4 18h16"
                            ></path>
                        </svg>
                    </button>

                    <div className="hidden md:flex space-x-4 float-end h-[45px]">
                        <div className="relative mb-10 z-10">
                            <div className="relative w-full max-w-sm">
                                <div className="absolute inset-y-0 left-0 flex items-center pl-3">
                                    <svg
                                        className="w-5 h-5 text-gray-500"
                                        xmlns="http://www.w3.org/2000/svg"
                                        fill="none"
                                        viewBox="0 0 24 24"
                                        stroke="currentColor"
                                    >
                                        <path
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            stroke-width="2"
                                            d="M21 21l-4.35-4.35M10.5 18a7.5 7.5 0 1 1 0-15 7.5 7.5 0 0 1 0 15z"
                                        />
                                    </svg>
                                </div>

                                <input
                                    type="text"
                                    placeholder="Search"
                                    className=" pl-10 py-2 w-[253px] border border-[#06040E] text-[#06040E] rounded-full focus:outline-none focus:ring-2 focus:ring-gray-400 focus:border-gray-400"
                                />
                            </div>
                        </div>
                        <button className="border border-orange-500 text-orange-500 px-4 py-2 rounded-full hover:bg-orange-500 hover:text-white transition">
                            Tutor Login
                        </button>
                        <button className="bg-orange-500 text-white px-4 py-2 rounded-full hover:bg-orange-600 transition">
                            Student Login
                        </button>
                    </div>
                </div>
            </div>

            {/* Overlay for Mobile Menu */}
            {isMenuOpen && (
                <div
                    className="fixed inset-0 bg-black bg-opacity-50 z-10"
                    onClick={toggleMenu}
                ></div>
            )}
        </header>
    );
};

export default Header;
