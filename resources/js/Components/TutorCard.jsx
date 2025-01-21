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
        <p className="text-sm text-center md:text-left md:text-lg text-gray-500">{tutorCount} Tutors Available</p>
      </div>
    </div>
  );
};

export default TutorCard;
