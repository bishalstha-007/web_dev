import {useState} from "react";
import UserCard from "./Card.jsx"

function App() {
  const [name, setName] = useState("Bishal");

  return(
    <UserCard
      name= {name} 
     Change = {() => setName("bimal")}
   />
  );
}

export default App