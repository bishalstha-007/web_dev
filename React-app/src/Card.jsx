function UserCard ({name,Change }) {
  return(
    <div>
      <p>Name={name}</p>
      <button onClick ={Change}>Change name</button>
    </div>
  );
}

export default UserCard