package yavirac.com.ec.rutasturisticas;

import android.content.Intent;
import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.view.View;
import android.widget.Button;

public class MainActivity extends AppCompatActivity {


    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);


    }

    public void onClick (View view){
        Intent miIntent = new Intent(MainActivity.this,MapsActivity.class);
        startActivity(miIntent);
    }
}
