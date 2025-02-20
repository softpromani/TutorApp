import React from "react";

const ConnectUs = () => {
  return (
    <div className="relative bg-gray-100 flex justify-center items-center py-10 px-5 md:px-10 h-[392px]">
      {/* Text Content */}
      <div className="max-w-xl text-center">
        <h2 className="text-2xl md:text-[45px] leading-10 text-left font-semibold mb-4 text-gray-800">
          Connect with us and start your learning journey today.
        </h2>
        <button className="mt-4 w-56 h-14 bg-orange-500 text-white py-2 px-6 rounded-2xl hover:bg-orange-600 transition">
          Contact Us
        </button>
      </div>

      {/* Image */}
      <div className="absolute -top-[2.1rem] left-5 md:-top-[4.1rem] md:left-10 lg:left-20">
        <img
          src="/assets/img/pages/Home/image 6.png"
          alt="Connect with us"
          className="w-40 md:w-52 lg:w-[455px] lg:h-[455px] object-cover"
        />
      </div>
    </div>
  );
};

export default ConnectUs;
