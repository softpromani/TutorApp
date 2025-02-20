import Blogs from "../Components/Blogs";
import ConnectUs from "../Components/ConnectUs";
import FindTutors from "../Components/FindTutors";
import Footer from "../Components/Footer";
import Header from "../Components/Header";
import OurTutor from "../Components/OurTutor";
import StudentThoughts from "../Components/StudentThoughts";
import SuccessComponent from "../Components/SuccessComponent";
import TutorCards from "../Components/TutorCards";

export default function Home({name}){
    return <>
    <Header />
    <FindTutors />
    <SuccessComponent />
    <TutorCards />
    <OurTutor />
    <StudentThoughts />
    <ConnectUs />
    <Blogs />
    <Footer />
    </>
}
