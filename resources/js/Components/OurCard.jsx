import React from "react";

const OurCard = ({tutor}) => {
  return (
    <div className="relative bg-white border border-gray-300 rounded-xl overflow-hidden lg:h-[536px] lg:w-full">
      <div className="py-6 px-10">
        {/* Profile Section */}
        <div className="flex items-center mb-4">
          <div className="w-16 h-16 rounded-full bg-gray-200 flex items-center justify-center">
            <img
              src={tutor.img}
              alt="Tutor"
              className="rounded-full"
            />
          </div>
          <div className="ml-4">
            <h3 className="text-base lg:text-xl font-semibold text-gray-900">{tutor.name}</h3>
            <p className="text-base text-gray-600">{tutor.address}</p>
          </div>
        </div>
        <div className="bg-[#B8B8B8] h-[1px] w-full mb-7"/>
        {/* Tags */}
        <div className="flex gap-2 mb-4">
          {tutor.subject.map((item, index) => (<span key={index} className="py-2 px-4 bg-[#F5F5F5] text-semiBlack text-xs lg:text-sm rounded-lg">
            {item}
          </span>))}
        </div>

        <div className="mb-6 lg:mb-0">
        {/* Experience */}
        <p className="text-xs lg:text-sm text-gray-700 font-semibold mb-2">
          {tutor.experience}
        </p>

        {/* description */}
        <p className="text-xs lg:text-sm text-gray-600">
          {tutor.description}
        </p>
        </div>    
        

        {/* Button */}
        <button className="absolute bottom-0 left-0 mt-4 w-full lg:h-[90px] py-2 bg-orange-500 text-white font-bold hover:bg-orange-600 transition">
          Enquire Now
        </button>
      </div>
    </div>
  );
};

export default OurCard;
