

function User() {
    const fruits = [
      { name: "apple", calories: 90 },
      { name: "orange", calories: 40 },
      { name: "banana", calories:35 },
      { name: "coconut" , calories:55},
      {name:"pineapple", calories:88}
    ];

    const items = fruits.map(fruit => <li> {fruit}</li> );
    return(<ol>items</ol>);
}

export default User 