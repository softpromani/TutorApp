import React from 'react';

const TutorCard = ({ subject="adsdsa", tutorCount="11" }) => {
  return (
    <div className='flex flex-col bg-white rounded-lg p-8'>
      {/* Orange Icon in Top-Right Corner */}
      <div className="flex justify-end p-2 rounded-lg">
      <img src='/assets/img/pages/dashboard-icon.png' alt='dashboard' className='w-10 h-10'/>
      </div>

      {/* Text Content */}
      <div className='text-left'>
        <h2 className="text-base text-center md:text-left md:text-3xl font-bold text-darkBlack">{subject}</h2>
        <div className='flex flex-row gap-1 items-center'>

        <p className="text-sm text-center md:text-left md:text-lg text-gray-500">{tutorCount} Tutors Available </p>
        <div className='bg-[#44C200] w-[14] h-[14px] rounded-full'/>
        </div>
      </div>
    </div>
  );
};

export default TutorCard;
