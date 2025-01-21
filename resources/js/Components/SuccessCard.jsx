
const SuccessCard = ({ img, count, title, description }) => {
    return (
        <div className="flex flex-col items-center p-6 rounded-lg w-72">
            <div className="relative flex items-center justify-center w-30 h-24 ">
                <img src={img} alt={img} className="w-21 h-24 object contain" />
                <div className="absolute -top-2 -right-20 text-orange-500 text-sm font-bold w-14 h-14 border-2 border-orange-300 rounded-full flex items-center justify-center">
                    {count}
                </div>
            </div>
            <h3 className="mt-4 text-lg font-semibold text-gray-800">{title}</h3>
            <p className="mt-2 text-sm text-gray-600 text-center">
                {description}
            </p>
        </div >
    );
};

export default SuccessCard;