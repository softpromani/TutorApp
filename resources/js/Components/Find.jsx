import React from "react";
import AnimatedSearchInput from "./ui/AnimatedSearchInput";

const Find = () => {
  return (
    <div className="bg-gray-50 flex flex-col items-center py-16 px-4 sm:px-6 lg:px-8 relative mx-36 mt-[86px]">
      {/* Avatars */}
       {/* Avatars with Nested Circles */}
       {["top-[90px] -left-[75px]", "top-[90px] right-[70px]", "bottom-0 left-14", "bottom-0 -right-20 "].map((position, index) => (
        <div
          key={index}
          className={`absolute bg-cover bg-center ${position} ${(index === 0 || index === 1) ? "w-[130px] h-[130px]" : "w-[168px] h-[168px]"}  transform -translate-x-1/2 -translate-y-1/2 flex items-center justify-center`}
          style={{
            backgroundImage: `url('/assets/img/pages/Home/avatar${index+1}.png')`,
          }}
        >
        </div>
      ))}

      {/* Content */}
      <h3 className="text-center text-lg md:text-[65px] leading-[1.1] font-bold text-blue1 mb-5">
        Find the Perfect Tutor for <br className="hidden sm:block" /> Your Learning Needs
      </h3>
      <p className="text-center text-gray-600 text-base font-normal md:text-xl max-w-3xl z-10 mb-10">
        Simply navigate through our platform, browse through a diverse pool of qualified instructors, and choose the one that perfectly aligns with your learning needs.
      </p>
      <div className="relative mb-10 z-10">
        <AnimatedSearchInput />
      </div>
    </div>
  );
};

export default Find;