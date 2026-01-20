import Student from './student.jsx'

function App() {
    return (
      <>
        <Student name="Bishal" age="21" isStudent={true}></Student>
        <Student name="Henrey" age={24} isStudent ={false}></Student>
        <Student name="Mourinho" age={35} isStudent={false}></Student>
        <Student></Student>
      </>
    );
}

export default App