
<li class="nav-item">
    <a href="{{route('command_livreur')}}" class="nav-link">
        <i class="nav-icon fas fa-book"></i>
        <p>
            My Commands
        </p>
    </a>
</li>

<li class="nav-item">
    <a href="#" class="nav-link active">
    <i class="nav-icon fas fa-user"></i>
    <p>
     My Profile
    <i class="right fas fa-angle-left"></i>
    </p>
    </a>
    <ul class="nav nav-treeview">
    <li class="nav-item">
    <a href="/livreur/{{$id}}/edit" class="nav-link">
    <i class="far fa-circle fa-edit"></i>
    <p>Edit Profil</p>
    </a>
    </li>
    <li class="nav-item">
        <form style="display: inline"  action="{{route('logout')}}" method="POST" class="nav-item">
            @csrf
            @method('DELETE')
            <a onclick="this.closest('form').submit();return false" style="cursor: pointer" class="nav-link"><i class="fas fa-sign-out-alt"></i> Logout

            </a>
        </form>
    </li>

    </ul>
    </li>
