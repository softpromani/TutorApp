import Footer from "../Components/Footer";
import Header from "../Components/Header";
import OurTutor from "../Components/OurTutor";
import SuccessComponent from "../Components/SuccessComponent";
import TutorCards from "../Components/TutorCards";

export default function Home({name}){
    return <>
    <Header />
    <SuccessComponent />
    <TutorCards />
    <OurTutor />
    <Footer />
    </>
}
