import React from 'react'
import FindCard from './FindCard'

const FindCards = () => {

    const cards = [
        {
            img: '/assets/img/pages/Home/Vector-2.png',
            title: 'Extensive mastery in subjects',
            description: 'Connect with GuruDhoondo to access a diverse pool of tutors.',
            color: 'bg-[#00BAEB]'
        },
        {
            img: '/assets/img/pages/Home/Vector.png',
            title: 'Personalized tutor matching',
            description: 'Experience personalized tutor matching with GuruDhoondo.',
            color: 'bg-[#EE668B]'
        },
        {
            img: '/assets/img/pages/Home/Vector-1.png',
            title: 'Effortless tutor discovery',
            description: 'GuruDhoondo simplifies the process of finding the ideal tutor.',
            color: 'bg-[#FFA600]'
        },
    ]

  return (
    <div className="grid grid-cols-1 lg:grid-cols-3 gap-6 mx-auto max-w-4xl">
  {cards.map((card, index) => (<FindCard key={index} card={card} />))}
</div>
  )
}

export default FindCards