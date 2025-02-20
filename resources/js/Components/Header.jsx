import React, { useState } from "react";

const Header = () => {
    const [isMenuOpen, setIsMenuOpen] = useState(false);

    const toggleMenu = () => {
        setIsMenuOpen(!isMenuOpen);
    };

    return (
        <header className="bg-gray-50 py-4 px-10 w-full fixed z-[100]">
            <div className="container flex items-center justify-between">
                <div className="flex flex-row gap-8">
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
                    {/* Logo */}
                    <div className="flex items-center md:ml-0 -ml-6">
                        <img
                            src="/assets/img/logo.png"
                            alt="Logo"
                            className="lg:w-[216px] w-[188px] md:h-[42px] h-[38px]"
                        />
                    </div>

                    {/* Navigation */}
                    <nav
                        className={`${isMenuOpen ? "block" : "hidden"
                            } md:flex md:items-center md:space-x-8 text-gray-600 fixed md:static top-0 left-0 w-2/3 md:w-auto h-full md:h-auto shadow-lg md:shadow-none p-4 md:p-0 transition-transform 1220-less:text-sm`}
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
                    <div className="md:hidden mr-2">
                        <svg width={30} height={30} viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M22.0664 22.0673L27.7202 27.7212" stroke="#FF8110" strokeWidth="1.875" strokeLinecap="round" strokeLinejoin="round" />
                            <path d="M2.2793 13.5865C2.2793 19.8316 7.34191 24.8943 13.587 24.8943C16.715 24.8943 19.5463 23.6242 21.5934 21.5716C23.6334 19.5261 24.8947 16.7037 24.8947 13.5865C24.8947 7.34144 19.8321 2.27882 13.587 2.27882C7.34191 2.27882 2.2793 7.34144 2.2793 13.5865Z" stroke="#FF8110" strokeWidth="1.875" strokeLinecap="round" strokeLinejoin="round" />
                        </svg>


                    </div>
                    <div className="md:hidden">
                        <button className="bg-orange-500 text-white text-sm px-4 py-1 rounded-xl hover:bg-orange-600 transition flex flex-row gap-2 items-center">
                            Login
                            <svg width={10} height={6} viewBox="0 0 10 6" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M9 1L5 5L1 1" stroke="white" strokeWidth={2} strokeLinecap="round" strokeLinejoin="round" />
                            </svg>
                        </button>
                    </div>
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
                                    className=" pl-10 py-2 lg:w-[253px] 768:w-[144px] border border-[#06040E] text-[#06040E] rounded-2xl focus:outline-none focus:ring-2 focus:ring-gray-400 focus:border-gray-400"
                                />
                            </div>
                        </div>
                        <button className="border border-orange-500 text-orange-500 px-4 py-2 rounded-2xl hover:bg-orange-500 hover:text-white transition">
                            Tutor Login
                        </button>
                        <button className="bg-orange-500 text-white px-4 py-2 rounded-2xl hover:bg-orange-600 transition">
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
