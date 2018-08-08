<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="css/common.css">
  <link rel="stylesheet" href="css/member.css">
  <title>Document</title>
</head>
<body>
  <?php
   include 'header.php';
  ?>

  <div class="subVisual">

  </div>

  <div class="container">
    <div id="lnb"></div>
    <div id="contents">
      <h2>회원가입</h2>
      <textarea>
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto provident consequuntur praesentium quas saepe dolores, doloremque, deleniti, facilis earum in quidem dolor est reiciendis, nulla ipsam unde. Deleniti quia odio atque hic amet, saepe alias nam sunt voluptatem expedita unde totam quis tempora libero aspernatur voluptates est. Ea nemo assumenda, exercitationem corporis maxime explicabo esse nostrum? Incidunt culpa laborum porro animi tempora, eaque harum delectus autem odio eligendi corporis. Quis delectus eos ducimus repellendus a natus iure nesciunt! Eaque voluptas alias nemo deserunt porro, nam sed assumenda ducimus, aliquid velit quia est, commodi vero repudiandae, ipsa quos incidunt numquam id nobis similique asperiores nulla. Eaque officia alias consequuntur, tempore officiis odit veniam quisquam perferendis, aliquid a eos porro quos error vel soluta. Quaerat illo blanditiis maiores laboriosam iste fuga eligendi enim, beatae? Sed, laborum distinctio aspernatur? Aliquid veniam iusto repudiandae velit in a voluptas. Est sit cupiditate quae recusandae amet maiores qui earum voluptatem. Officia, reprehenderit iusto culpa molestiae, fugit alias animi. Suscipit inventore, eius magnam nihil iusto cumque voluptates vel repellendus qui temporibus saepe omnis, iste! Doloremque iste tempore, magnam asperiores harum consequatur blanditiis, odio, dicta itaque placeat alias totam vero eaque dignissimos cumque quibusdam eius, doloribus. Totam illo, optio deserunt aperiam sint molestias libero, esse dolore non aliquid officia eligendi distinctio doloribus autem quasi quia necessitatibus excepturi tempora, facere iure error maxime. Nobis dolore eligendi dignissimos fuga laboriosam omnis quis provident maxime eaque non fugit velit dolores, maiores ex cumque dolorem quam, totam voluptatem adipisci numquam, doloribus blanditiis cum dicta! Sunt excepturi quam, nostrum, repellat est inventore aut labore iure architecto velit enim quod tempore magni nihil, nam, odio perferendis laboriosam. Dolores doloribus eos quo temporibus delectus voluptate cumque nam nulla incidunt dolore? Eveniet et, omnis eum quae perferendis, rerum, animi magni excepturi esse ut aliquam dicta distinctio.
      </textarea>
      <input id="terms" type="checkbox"><label for="terms"> 약관을 모두 읽었으면 동의합니다.</label>
      <table>
        <tr>
          <th width="25%">이름</th>
          <td>
            <input type="text">
          </td>
        </tr>
        <tr>
          <th width="25%">주민등록번호</th>
          <td>
            <input type="text"> - <input type="password">
          </td>
        </tr>
        <tr>
          <th width="25%">아이디</th>
          <td>
            <input type="text">
            <img src="img/btnCheck.gif" alt="">
          </td>
        </tr>
        <tr>
          <th width="25%">비밀번호</th>
          <td>
            <input type="text">
          </td>
        </tr>
        <tr>
          <th width="25%">비밀번호 확인</th>
          <td>
            <input type="password">
          </td>
        </tr>
        <tr>
          <th width="25%">주소</th>
          <td>
            <input type="text"> - <input type="text">
            <img src="img/btnCheck.gif" alt=""> <br>
            <input class="long" type="text">
          </td>
        </tr>
        <tr>
          <th width="25%">취미</th>
          <td>
            <input id="sp" type="checkbox"><label for="sp"> 스포츠</label>
            <input id="ps" type="checkbox"><label for="ps"> 패션</label>
            <input id="mv" type="checkbox"><label for="mv"> 영화</label>
            <input id="gm" type="checkbox"><label for="gm"> 게임</label>
          </td>
        </tr>
        <tr>
          <th width="25%">성별</th>
          <td>
            <input id="male" type="radio" name="gender"><label for="male"> 남성
            <input id="female" type="radio" name="gender"><label for="female"> 여성
          </td>
        </tr>
        <tr>
          <th width="25%">연락처</th>
          <td>
            <input type="text"> -<input type="text"> <br>
            <input class="long" type="text">
          </td>
        </tr>
        <tr>
          <th width="25%">이메일 주소</th>
          <td>
            <input type="text"> @ <input type="text">
          </td>
        </tr>
      </table>
      <div class="btnSet">
        <input type="submit">
        <input type="reset">
      </div>
    </div>
  </div>

  <?php
   include 'footer.php'
  ?>
</body>
</html>
