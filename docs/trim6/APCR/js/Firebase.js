class FirebaseUser {

  /**this the method constructor*/
  constructor(idTbody) {
    this.objTbody = document.getElementById(idTbody);
    this.URL = "https://api-apcr-default-rtdb.firebaseio.com/api/users";
  }

  /**this the method for get data users*/
  async getDataUsers() {
    return fetch(this.URL + ".json")
      .then((res) => {
        if (!res.ok) {
          console.log('Result: Problem');
          return;
        }
        return res.json();
      })
      .then((data) => {
        this.setTableUser(data);
      })
      .catch((error) => {
        console.error(error);
      })
      .finally();
  }

  /**This is the method async to get user data by id
   * @param id user
  */
  async getDataUser(id) {
    return fetch(this.URL + "/" + id + ".json")
      .then((res) => {
        if (!res.ok) {
          console.log('Result: Problem');
          return;
        }
        return res.json();
      })
      .then((data) => {
        return data;
      })
      .catch((error) => {
        console.error(error);
      })
      .finally();
  }
  /**This is the method to create the table rows using a users Json format
   * @param json user
  */
  setTableUser(data) {
    let contDiv = 1;
    let DivTable = "";
    let btnActions = "";
    for (const user in data) {
      let getId = "'" + user + "'";
      btnActions = '<div class="btn-group " role="group" aria-label="Basic mixed styles example">' +
        //'<button type="button" onclick="showUser(' + getId + ')" class="btn btn-info"><img class="img img-fluid" src="./img/icons/eye-fill.svg"></button>' +
        '<button type="button" onclick="editUser(' + getId + ')" class="btn btn-warning bg-transparent"><img class="img img-fluid" src="./img/car.svg"></button>' +
        //'<button type="button" onclick="deleteUser(' + getId + ')" class="btn btn-danger"><img class="img img-fluid" src="./img/icons/trash3-fill.svg"></button>' +
        '</div>';
      DivTable += "<div class='flex-item'>"+ btnActions +  "</div>";
      
//"<td class='text-center'>" + contRow + "</td>" +
      /*   "<td>" + data[user].id + "</td>" +
        "<td>" + data[user].nombre_propietario + "</td>" +
        "<td class='text-center'>" + data[user].numero_torre + "</td>" +
        "<td class='text-center'>" + data[user].apartamento + "</td>" +
        "<td class='text-center'>" + data[user].estado + "</td>" +
        "<td>" + data[user].tipo_vehiculo + "</td>" +
        "<td class='text-center'>" + data[user].placa + "</td>" +
        "<td class='text-center'>" + data[user].fecha + "</td>" + */
        
        
      contDiv++;
    }
    this.objTbody.innerHTML = DivTable;
  }

  /**This is the method to create the new data item in user Json format
  * @param json user
  */
  async setCreateUser(data) {
    return fetch(this.URL + ".json", {
      method: 'POST',
      headers: {
        'Content-Type': 'application/json'
      },
      body: JSON.stringify(data)
    })
      .then((res) => {
        if (!res.ok) {
          console.log('Result: Problem');
          return;
        }
        return res.json();
      })
      .then((data) => {
        this.getDataUsers();
      })
      .catch((error) => {
        console.error(error);
      })
      .finally();
  }
  /**This is the method to update the element by sending a set of data in Json format from the user
  * @param json user
  @param id user
  */
  async setUpdateUser(id, data) {
    return fetch(this.URL + "/" + id + ".json", {
      method: 'PUT',
      headers: {
        'Content-Type': 'application/json'
      },
      body: JSON.stringify(data)
    })
      .then((res) => {
        if (!res.ok) {
          console.log('Result: Problem');
          return;
        }
        return res.json();
      })
      .then((data) => {
        this.getDataUsers();
      })
      .catch((error) => {
        console.error(error);
      })
      .finally();
  }
  /**This is the method to delete the element
  @param id user
  */
  async setDeleteUser(id) {
    return fetch(this.URL + "/" + id + ".json", {
      method: 'DELETE'
    })
      .then((res) => {
        if (!res.ok) {
          console.log('Result: Problem');
          return;
        }
        return res.json();
      })
      .then((data) => {
        return data;
      })
      .catch((error) => {
        console.error(error);
      })
      .finally();
  }
}