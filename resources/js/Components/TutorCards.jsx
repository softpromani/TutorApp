import React from 'react'
import TutorCard from './TutorCard'
import Button from './ui/Button'

const TutorCards = () => {

    const tutors = [
        {
            id: '1',
            subject: 'Mathematics',
            tutorCount: '203'
        },
        {
            id: '2',
            subject: 'English',
            tutorCount: '203'
        },
        {
            id: '3',
            subject: 'Biology',
            tutorCount: '203'
        },
        {
            id: '4',
            subject: 'Accounting',
            tutorCount: '203'
        },
        {
            id: '5',
            subject: 'Physics',
            tutorCount: '203'
        },
        {
            id: '6',
            subject: 'Chemistry',
            tutorCount: '203'
        },
        {
            id: '7',
            subject: 'Botany',
            tutorCount: '203'
        },
        {
            id: '8',
            subject: 'Geography',
            tutorCount: '203'
        },
    ]

    return (
        <div className='text-center bg-gray-50 mb-24'>
            <div className='mb-14'>
                <h4 className="text-2xl md:text-[45px] font-semibold text-blue1">Find Tutors For</h4>
            </div>
            <div className="grid grid-cols-1 gap-4 lg:grid-cols-4 lg:gap-8 mx-12">
                {tutors.map((tutor) => (
                    <TutorCard key={tutor.id} subject={tutor.subject} tutorCount={tutor.tutorCount}/>
                ))}
                
            </div>

            <Button className='bg-transparent border border-orange-500 px-8 py-2 text-xl rounded-2xl text-orange-500 w-56 mt-[60px] hover:bg-orange-500 hover:text-white' text='View More' onClick={() => console.log('View More')} />
        </div>

    )
}

export default TutorCards